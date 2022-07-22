<?php

use App\Http\Controllers\MainController;
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

Route::get('login', [MainController::class, 'index'])->name('login');
Route::post('post-login', [MainController::class, 'postLogin'])->name('login.post');
Route::get('registration', [MainController::class, 'registration'])->name('register');
Route::post('post-registration', [MainController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [\App\Http\Controllers\EventController::class, 'index'])->name('index');
Route::get('logout', [MainController::class, 'logout'])->name('logout');
Route::get('/create', [\App\Http\Controllers\EventController::class, 'create'])->name('create');
Route::get('/show/{id}', [\App\Http\Controllers\EventController::class, 'show'])->name('show');
Route::get('/edit/{id}', [\App\Http\Controllers\EventController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [\App\Http\Controllers\EventController::class, 'update'])->name('update');
Route::post('/store', [\App\Http\Controllers\EventController::class, 'store'])->name('store');
Route::post('/delete/{id}', [\App\Http\Controllers\EventController::class, 'destroy'])->name('delete');
