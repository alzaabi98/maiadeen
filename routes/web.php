<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('home');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/courses', 'CourseController@index')->name('courses');
// Route::get('/courses/{cat}', 'CourseController@filter')->name('courses-cat');

Route::get('/courses/1', 'CourseController@show')->name('courses-page');
