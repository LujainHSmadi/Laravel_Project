<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\RegisterController;
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

Route::get('/home', 'App\Http\Controllers\TemplateController@index');
Route::get('/about', 'App\Http\Controllers\TemplateController@about');
Route::get('/services', 'App\Http\Controllers\TemplateController@services');
Route::get('/contact', 'App\Http\Controllers\TemplateController@contact');

Route::get('/index', 'App\Http\Controllers\AdminTemplateController@index');

// help

Route::resource('/', HelpController::class);

Route::resource('admin', AdminController::class);

Route::view('register', 'pages.register');
Route::view('signup', 'register/signup');
Route::view('login', 'register/login');
Route::view('profile', 'register/profile');
Route::post('login', [RegisterController::class, 'user']);
Route::post('signup', [RegisterController::class, 'data']);

Route::resource('users', RegisterController::class);
Route::resource('donate', DonateController::class);
Route::get('adminLogin', 'App\Http\Controllers\AdminController@login');
