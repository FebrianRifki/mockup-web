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



Auth::routes();

Route::get('/bo/dashboard', 'DashboardController@index');

/* products routes */
Route::resource('/bo/products', 'ProductController');

/* plaform routes */
route::resource('/bo/platforms', 'PlatformController');

Route::get('/home', 'HomeController@index')->name('home');
