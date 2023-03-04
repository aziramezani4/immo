<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Property\PropertyController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect(app()->getLocale());
//    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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

        Route::get('first/step', [PropertyController::class, 'first_step'])
            ->middleware(['auth'])->name('first_step');

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
    });

Route::post('api/fetch-states', [PropertyController::class, 'fetchState']);
Route::post('api/fetch-cities', [PropertyController::class, 'fetchCity']);
