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

Route::get('/', 'PublicController@publicPages');
Route::get('/home', 'HomeController@index')->name('home');


// User routes
Route::resource('users', 'UserController');
Route::get('users/{id}/role', 'UserController@getUserRole');
Route::post('/user/{id}/assign-role', 'UserController@assignRole');
Route::get('/users/{id}/delete', 'UserController@destroy');


// Role routes
Route::resource('/roles', 'RoleController');
Route::post('/roles/{id}/sync-permissions', 'RoleController@syncPermissions');
Route::post('/roles/assign-permissions', 'RoleController@assignPermissions');
Route::get('/roles/{id}/user', 'RoleController@getUsers');
Route::get('/roles/{id}/delete', 'RoleController@destroy');

// Permission routes
Route::resource('/permissions', 'PermissionController');

// profile and account routes
Route::get('/profile', 'ProfileController@profile');
Route::get('/profile-edit', 'ProfileController@editProfile');

// Log routes
Route::get('/logs', 'LogController@index');
