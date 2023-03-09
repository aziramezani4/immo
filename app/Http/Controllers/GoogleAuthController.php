<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            $existUser = Account::where('email', $googleUser->email)->first();

            if ($existUser) {
                Auth::loginUsingId($existUser->id);
            } else {
                $user = new Account();
                $user->first_name = $googleUser->name;
                $user->email = $googleUser->email;
//                $user->google_id = $googleUser->id;
                $user->password = bcrypt(rand(1, 10000));
               $user->username = rand(1234, 9999999999);
                $user->save();
                Auth::loginUsingId($user->id);
            }
            return redirect()->to('/');
        } catch (Exception $e) {
            return 'error';
        }
    }
}
