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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index')->middleware('auth');
Route::get('/profile','DashboardController@profile')->name('dashboard.profile')->middleware('auth');
Route::resource('users','UsersController')->middleware('auth');
Route::resource('expense', 'ExpenseController')->middleware('auth');
Route::get('/attendance', 'AttendanceController@index')->name('attendance.index')->middleware('auth');
Route::get('/user/mark-present', 'AttendanceController@markUserPresent')->name('attendance.markUserPresent')->middleware('auth');


