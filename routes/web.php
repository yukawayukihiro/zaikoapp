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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/zaiko.detail', 'App\Http\Controllers\ProductsController@getDetail');
Route::get('/zaiko.add', 'App\Http\Controllers\ProductsController@getAdd');
Route::post('/zaiko.create', 'App\Http\Controllers\ProductsController@getCreate');
Route::get('/zaiko.topedit', 'App\Http\Controllers\ProductsController@getTopEdit');
Route::get('/zaiko.edit/{id}', 'App\Http\Controllers\ProductsController@getEdit');
Route::post('/zaiko.update', 'App\Http\Controllers\ProductsController@getUpdate');
Route::get('/zaiko.list', 'App\Http\Controllers\ProductsController@getList');
Route::post('/zaiko.del/{id}', 'App\Http\Controllers\ProductsController@getDelete');
Route::post('/zaiko.search', 'App\Http\Controllers\ProductsController@getSearch');
