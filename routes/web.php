<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KamController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FiverrProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin-panel.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';






Route::resource('sliders', SliderController::class);
Route::resource('orders', OrderController::class);
Route::resource('kams', KamController::class);
Route::resource('employees', EmployeeController::class);
Route::resource('fiverr-profiles', FiverrProfileController::class);


Route::get('/get-employee/{id}', [EmployeeController::class, 'getEmployee']);
