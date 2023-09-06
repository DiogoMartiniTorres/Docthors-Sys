<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MedicosController;
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


Route::middleware(['auth', 'verified'])->group(callback: function () {

    Route::get('/dashboard', function () {

        return view('dashboard');
    })->name('dashboard');

    Route::get('medicos',[MedicosController::class, 'index'])->name('index.medicos');



});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::fallback(function () {
    return view('app.pages.errors.404');
});

require __DIR__.'/auth.php';
