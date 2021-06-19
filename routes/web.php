<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [\App\Http\Controllers\BladeController::class, 'about'])->name('about');
Route::get('/contacts', [\App\Http\Controllers\BladeController::class, 'contacts'])->name('contacts');
Route::get('/delivery', [\App\Http\Controllers\BladeController::class, 'delivery'])->name('delivery');
Route::get('/payment', [\App\Http\Controllers\BladeController::class, 'payment'])->name('payment');
Route::get('/dillers', [\App\Http\Controllers\BladeController::class, 'dillers'])->name('dillers');
