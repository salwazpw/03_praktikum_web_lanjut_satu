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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('category')->group(function(){
    Route::get('/product', [App\Http\Controllers\ProductControllers::class, 'index']);
});

Route::get('news/{judul}', [App\Http\Controllers\NewsController::class, 'berita']);

Route::prefix('program')->group(function(){
    Route::get('/kunjungan-industri', [App\Http\Controllers\ProgramControllers::class, 'index']);
});

Route::get('/about-us', [App\Http\Controllers\AboutControllers::class, 'index']);

Route::resource('/contact-us', App\Http\Controllers\ContactControllers::class);
