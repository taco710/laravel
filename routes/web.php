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



Route::get('xxx', 'AAA\Controller@bbb');

Route::get('admin/profile/create', 'Admin\profileController@create');

Route::get('admin/profile/edit', 'Admin\profileController@edit');







