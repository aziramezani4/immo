<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Account;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

//        return redirect()->intended(RouteServiceProvider::HOME);
        return redirect()->intended(app()->getLocale().RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function github()
    {
      return Socialite::driver('github')->redirect();
    }
    public function callbackGithub()
    {
      $user = Socialite::driver('github')->user();

      $userQuery = Account::query()->where('email',$user->email);

      if($userQuery->exists()){
         $authenticateUser = $userQuery->first();
      }else{
          $authenticateUser = Account::query()->create([
             'first_name'=> $user->nickname,
             'last_name'=> $user->nickname,
              'email'=>$user->email,
              'password'=>bcrypt(Carbon::now()->timestamp),
          ]);
      }
\auth()->login($authenticateUser);
//      return redirect('/dashboard');
        return \view('welcome');
    }
}
