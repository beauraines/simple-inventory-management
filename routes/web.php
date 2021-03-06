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
Route::resource('item', 'ItemController')->only('index');
Route::resource('uom', 'UomController')->only('index');
Route::resource('class-of-supply', 'ClassOfSupplyController')->only('index');
