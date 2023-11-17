<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\InstituteController;
use App\Http\Controllers\JongereController;
use App\Http\Controllers\ActivityController;
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

    // Institute routes
    Route::post('/institute/store', [InstituteController::class,'StoreInstitute'])->name('institute.store');
    Route::get('/institute/edit/{id}', [InstituteController::class,'EditInstitute'])->name('institute.edit');
    Route::patch('/institute/update/{id}', [InstituteController::class,'UpdateInstitute'])->name('institute.update');
    Route::delete('/institute/delete/{id}', [InstituteController::class,'DestroyInstitute'])->name('institute.delete');

    // Jongere routes
    Route::post('/jongere/store', [JongereController::class, 'StoreJongere'])->name('jongere.store');
    Route::get('/jongere/edit/{id}', [JongereController::class,'EditJongere'])->name('jongere.edit');
    Route::patch('/jongere/update/{id}', [JongereController::class,'UpdateJongere'])->name('jongere.update');
    Route::delete('/jongere/delete/{id}', [JongereController::class,'DestroyJongere'])->name('jongere.delete');

    // Activity routes
    Route::post('/activity/store', [ActivityController::class, 'StoreActivity'])->name('activity.store');
    Route::get('/activity/edit/{id}', [ActivityController::class,'EditActivity'])->name('activity.edit');
    Route::patch('/activity/update/{id}', [ActivityController::class,'UpdateActivity'])->name('activity.update');
    Route::delete('/activity/delete/{id}', [ActivityController::class,'DestroyActivity'])->name('activity.delete');
});

require __DIR__.'/auth.php';
