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
Route::get('/', 'App\Http\Controllers\MainController@home');
Route::get('/home', 'App\Http\Controllers\MainController@home');

Route::get('/about_product', 'App\Http\Controllers\MainController@about');

Route::get('/company', 'App\Http\Controllers\MainController@company');
Route::post('/company/add', 'App\Http\Controllers\MainController@add_company');
Route::post('/company/del/id', 'App\Http\Controllers\MainController@delete_company');
Route::post('/company/change/id', 'App\Http\Controllers\MainController@change_company');

Route::get('/product', 'App\Http\Controllers\MainController@review')->name('product');
Route::post('/product/check', 'App\Http\Controllers\MainController@access_user');

Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'ID: ' . $id . ' . NAME .' . $name;
});
