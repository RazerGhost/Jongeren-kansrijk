<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\InstituutController;
use App\Http\Controllers\JongereController;
use App\Http\Controllers\ActiviteitController;
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
    return view('welcome');
});

Route::get('/dashboard', [ViewController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Instituut routes
    Route::post('/instituut/store', [InstituutController::class,'StoreInstituut'])->name('instituut.store');
    Route::get('/instituut/edit/{id}', [InstituutController::class,'EditInstituut'])->name('instituut.edit');
    Route::patch('/instituut/update/{id}', [InstituutController::class,'UpdateInstituut'])->name('instituut.update');
    Route::delete('/instituut/delete/{id}', [InstituutController::class,'DestroyInstituut'])->name('instituut.delete');

    // Jongere routes
    Route::post('/jongere/store', [JongereController::class, 'StoreJongere'])->name('jongere.store');
    Route::get('/jongere/edit/{id}', [JongereController::class,'EditJongere'])->name('jongere.edit');
    Route::patch('/jongere/update/{id}', [JongereController::class,'UpdateJongere'])->name('jongere.update');
    Route::delete('/jongere/delete/{id}', [JongereController::class,'DestroyJongere'])->name('jongere.delete');

    // Activiteit routes
    Route::post('activiteit/store', [ActiviteitController::class, 'StoreActiviteit'])->name('activiteit.store');
    Route::get('activiteit/edit/{id}', [ActiviteitController::class,'EditActiviteit'])->name('activiteit.edit');
    Route::patch('activiteit/update/{id}', [ActiviteitController::class,'UpdateActiviteit'])->name('activiteit.update');
    Route::delete('activiteit/delete/{id}', [ActiviteitController::class,'DestroyActiviteit'])->name('activiteit.delete');
});

require __DIR__.'/auth.php';
