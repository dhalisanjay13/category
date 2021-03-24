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
//User Route
Route::get('/users', 'HomeController@userList')->middleware('is_admin')->name('users');
Route::get('/user-login/{id}', 'HomeController@userLogin')->middleware('is_admin')->name('user-login');
Route::get('/admin-login/{id}', 'HomeController@adminLogin')->name('admin-login');

//Category Route
Route::get('/add-category', 'HomeController@addCata')->middleware('is_admin')->name('add-cat');
Route::get('/list-category', 'HomeController@listCata')->name('list-cat');
Route::post('/save-category', 'HomeController@saveCata')->middleware('is_admin')->name('save-cat');

//Product Route
Route::get('/list-product', 'HomeController@listProduct')->name('list-product');
Route::get('/add-product/{id}', 'HomeController@addProduct')->name('add-product');
Route::post('/save-product', 'HomeController@saveProduct')->middleware('is_admin')->name('save-product');

