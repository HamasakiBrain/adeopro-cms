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

Route::get('/catalog/auto', [\App\Http\Controllers\BladeController::class, 'auto'])->name('auto');
Route::get('/catalog/all', [\App\Http\Controllers\BladeController::class, 'all'])->name('catalog.all');

Route::get('/table', function (){
    return view('table');
})->name('table');

Route::prefix('/jetbrain')->middleware(['isAdmin'])->group(function (){
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.main');
    Route::get('/users/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users');
    Route::any('/users/destroy/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin.users.destroy');

    Route::get('/country', [\App\Http\Controllers\CountryController::class, 'index'])->name('admin.country');
    Route::any('/country/add', [\App\Http\Controllers\CountryController::class, 'store'])->name('admin.country.add');
    Route::any('/country/destroy/{id}', [\App\Http\Controllers\CountryController::class, 'destroy'])->name('admin.country.destroy');

    Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('admin.posts');
    Route::any('/posts/add', [\App\Http\Controllers\PostController::class, 'store'])->name('admin.posts.add');
    Route::any('/posts/destroy/{id}', [\App\Http\Controllers\PostController::class, 'destroy'])->name('admin.posts.destroy');

    Route::get('/dillers', [\App\Http\Controllers\DillerController::class, 'index'])->name('admin.dillers');
    Route::any('/dillers/add', [\App\Http\Controllers\DillerController::class, 'store'])->name('admin.dillers.add');
    Route::any('/dillers/destroy/{id}', [\App\Http\Controllers\DillerController::class, 'destroy'])->name('admin.dillers.destroy');
});


Route::get('/cabinet/', [\App\Http\Controllers\BladeController::class, 'cabinet'])->name('cabinet');
Route::any('/cabinet/update', [\App\Http\Controllers\BladeController::class, 'userUpdate'])->name('user.update');
Route::any('/password/update', [\App\Http\Controllers\BladeController::class, 'passwordUpdate'])->name('password.update');
