<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\Property\PropertyController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/test', function () {
    return view('property.test');
})->name('test');


Route::post('api/fetch-states', [PropertyController::class, 'fetchState']);
Route::post('api/fetch-cities', [PropertyController::class, 'fetchCity']);

Route::get('/google-login', [GoogleAuthController::class,'redirectToProvider']);
Route::get('/callback', 'GoogleAuthController@handleProviderCallback');

Route::get('/login/github', [AuthenticatedSessionController::class, 'github'])->name('login.github');
Route::get('/callback/github', [AuthenticatedSessionController::class, 'callbackGithub'])->name('callback.github');

Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/callback', function () {

    $githubUser = Socialite::driver('github')->user();
});

Route::get('/', function () {
    return redirect(app()->getLocale());
//    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::prefix('{locale}')
    ->where(['locale' => '[a-zA-Z]{2}'])
    ->middleware('setlocale')
    ->group(function () {
        Route::get('/', function () {
            return view('welcome');
        });

        Route::get('/dashboard', function () {

            return view('dashboard');
        })->middleware(['auth'])->name('dashboard');

        Route::get('/profile', function () {
            $languages = DB::table('languages')->get();
            return view('profile', ['languages' => $languages]);
        })->middleware(['auth'])->name('profile');

        Route::post('/profile',[PropertyController::class,'update_profile'])
            ->middleware(['auth'])->name('update.profile');


        Route::get('/password', function () {
            $languages = DB::table('languages')->get();
            return view('changePassword', ['languages' => $languages]);
        })->middleware(['auth'])->name('password');

        Route::post('/password',[PropertyController::class,'update_password'])
            ->middleware(['auth'])->name('update.password');


        Route::get('/home', [PropertyController::class, 'home'])
            ->middleware(['auth'])->name('home');

//        Route::get('first/step', [PropertyController::class, 'first_step'])
//            ->middleware(['auth'])->name('first_step');

        Route::get('create/properties', [PropertyController::class, 'create_peoperty'])
            ->middleware(['auth'])->name('create_peoperty');

        Route::post('second/step', [PropertyController::class, 'store'])
            ->middleware(['auth'])->name('second_step');

        Route::get('second/step', [PropertyController::class, 'show'])
            ->name('second_step1');


        Route::post('update/properties/step1/{property}',
            [PropertyController::class,
                'update_property_step1'])->middleware(['auth'])->name('update.property.step1');


        Route::get('update/properties/step1/{property}',
            [PropertyController::class, 'step2'])
            ->name('step2');

//        Route::post('save/qty',
//            [PropertyController::class,
//                'save_qty'])->middleware(['auth'])->name('save.qty');

        Route::get('update/properties/step1/notstarted/delete/{id}', [PropertyController::class, 'destroy'])->name('delete');

        require __DIR__ . '/auth.php';

        Route::post('update/properties/step2/{property}', [PropertyController::class, 'update_property_step2'])->name('update.property.step2');
        Route::post('store/facility', [PropertyController::class, 'store_facility'])->name('store.facility');

        Route::get('update/properties/step3/{property}',
            [PropertyController::class, 'step3'])
            ->name('step3');
        Route::post('update/properties/step3/{property}', [PropertyController::class, 'update_property_step3'])->name('update.property.step3');

        Route::get('update/properties/step4/{property}',
            [PropertyController::class, 'step4'])
            ->name('step4');

        Route::post('update/properties/step4/{property}', [PropertyController::class, 'update_property_step4'])->name('update.property.step4');

        Route::get('update/properties/step5/{property}/{package}', [PropertyController::class, 'show_package'])
            ->name('show.package');

        Route::get('publish/properties/{property}',
            [PropertyController::class, 'publish'])
            ->name('publish');

        Route::get('my/properties/{property}',
            [PropertyController::class, 'properties'])
            ->name('my.properties');

        Route::get('/myProperties', function () {
            $languages = DB::table('languages')->get();
            return view('myProperties', ['languages' => $languages]);
        })->middleware(['auth'])->name('myPropertiess');

    });

Route::post('api/fetch-states', [PropertyController::class, 'fetchState']);
Route::post('api/fetch-cities', [PropertyController::class, 'fetchCity']);
