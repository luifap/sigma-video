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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::resource('cursos', App\Http\Controllers\UserController::class )->names('web.cursos');
Route::resource('users', App\Http\Controllers\UserController::class )->names('web.users');
Route::resource('videos', App\Http\Controllers\VideoController::class )->names('web.videos');
Route::resource('cursovideo', App\Http\Controllers\cursoVideoController::class )->names('web.cursovideo');
Route::resource('videouser', App\Http\Controllers\VideoUserController::class )->names('web.videouser');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
