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

Route::view('/','home')->name('home');
Route::view('/contact','contact')->name('contact');
//Route::get('/contact','contact')->name('contacts');

Route::post('contact', [\App\Http\Controllers\MessagesController::class, 'store']);
//Route::get('contact', [\App\Http\Controllers\MessagesController::class, 'index'])->name('contact.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
