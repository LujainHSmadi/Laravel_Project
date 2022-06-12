<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonateController;
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

Route::get('/', 'App\Http\Controllers\TemplateController@index');
Route::get('/about', 'App\Http\Controllers\TemplateController@about');
Route::get('/services', 'App\Http\Controllers\TemplateController@services');
Route::get('/contact', 'App\Http\Controllers\TemplateController@contact');

Route::resource('admin', AdminController::class);
Route::resource('users', RegisterController::class);
Route::resource('donate', DonateController::class);
Route::get('adminLogin', 'App\Http\Controllers\AdminController@login');
Route::get('/login', 'App\Http\Controllers\AdminController@authLogin')->name('login-auth');
Route::get('/loginout', 'App\Http\Controllers\AdminController@logout')->name('logout');
