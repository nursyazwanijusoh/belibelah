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
Route::get('/users', 'HomeController@getProfile')->name('users');
Route::get('/additem', 'HomeController@showAddItemForm')->name('additem');
Route::post('/additem', 'HomeController@addItem')->name('doadditem');
Route::get('/listitems', 'HomeController@listItems')->name('listitems');

Route::post('/user/edit', 'UserMgmtController@doEditUser')->name('doEditUser');
Route::get('/user/edit/{user_id}', 'UserMgmtController@showEditUser')->name('showEditUser');
