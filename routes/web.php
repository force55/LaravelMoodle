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

Route::get('users', 'UsersController@index')->name('users');
Route::get('courses', 'CoursesController@index')->name('courses');
Route::get('enrolled_users', 'UsersController@enrolledUsers')->name('enrolled_users');
