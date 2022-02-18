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

Route::get('/basic', function () {
    return view('asesores-basic');
});

Route::get('/pro', function () {
    return view('asesores-pro');
});

Route::get('/{url}','App\Http\Controllers\UserController@getUser');
