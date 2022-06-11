<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\AdminTemplateController;
use App\Http\Controllers\AdminController;
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

Route::get('/','App\Http\Controllers\TemplateController@index' );
Route::get('/about','App\Http\Controllers\TemplateController@about' );
Route::get('/services','App\Http\Controllers\TemplateController@services' );
Route::get('/contact','App\Http\Controllers\TemplateController@contact' );




Route::resource('admin', AdminController::class);
