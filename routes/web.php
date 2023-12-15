<?php

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

Route::resource('/recipes', \App\Http\Controllers\RecipesController::class);
Route::resource('/posts', \App\Http\Controllers\PostController::class);
Route::get('/febri', function () {
    return ("Saya murid rpl");
});

Route::get('/guru', function () {
    return view('data_guru');
});

Route::get('/siswa',function(){
    return view('data_siswa');
});

Route::resource('recipe', \App\Http\Controllers\RecipeController::class)->only(['index', 'show']);
Route::get('/user', [\App\Http\Controllers\PostController::class, 'user']);
Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');


Route::get('contact',[\App\Http\Controllers\ContactController::class,'index'])->name('contact.index');
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'sendEmail'])->name('contact.send');

Route::get('register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');

Route::post('register-proses', [\App\Http\Controllers\AuthController::class, 'registerPost'])->name('register-proses');

Route::get('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');

Route::post('/login-proses', [\App\Http\Controllers\AuthController::class, 'loginPost']);
