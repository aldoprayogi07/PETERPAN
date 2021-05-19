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

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DahsboardController@index')->name
    ('dashboard');
});

Route::group(['middleware' => ['auth', 'role:user']], function() {
    Route::get('/dashboard/myprofile', 'App\Http\Controllers\DahsboardController@myprofile')->name
    ('dashboard.myprofile');
});

require __DIR__.'/auth.php';
