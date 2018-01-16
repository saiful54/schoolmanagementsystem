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
    return view('auth.login');
});

Route::get('website', function () {
    return view('boot.master');
});

Route::get('service', function () {
    return view('boot.form');
});

Route::get('home/{id}/{name}', function ($id, $name) {
    return view('home').$id. $name;
});

Route::resource('addform', 'SaifController');

Route::resource('user', 'linkController');

Route::get('dashboard', 'linkController@dashboard');
Route::get('adduser', 'linkController@adduser');
Route::get('user_list', 'linkController@user_list');
Route::get('createuser', 'linkController@createuser');
Route::get('/getedit/{id}', 'linkController@getedit ');
Route::get('logout', 'linkController@logout');
Route::get('profile', 'linkController@profile')->name('profile');
Route::post('profile', 'linkController@update_avatar');

Route::get('photo', 'linkController@fileshow')->name('upload.photo');
Route::post('photo', 'linkController@filestore');


Auth::routes();
