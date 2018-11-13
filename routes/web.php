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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/manage-user','HomeController@userList')->name('user.list');
Route::get('/update-user/{id}','HomeController@userEdit')->name('user.edit');
Route::PUT('/update-user/{id}','HomeController@userUpdate')->name('user.update');


Route::get('/manage-role','HomeController@roleList')->name('role.list');
Route::get('/update-role/{id}','HomeController@roleEdit')->name('role.edit');


Route::get('/manage-permission','HomeController@permissionList')->name('permission.list');
Route::get('/update-permission','HomeController@permissionEdit')->name('permission.edit');
