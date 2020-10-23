<?php
use Illuminate\Http\Request;
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


Route::get('/', 'UserController@index');

//LOGIN//
Route::get('login', 'UserController@login');
Route::get('logout', 'UserController@logout');

Route::post('register', 'UserController@store');
Route::post('login/check', 'UserController@check');

Route::get('user/dashboard', 'UserController@dashboard');
Route::get('user/dictionary', 'DictionaryController@index');
Route::get('user/journal', 'JournalController@index');
Route::get('user/profile', 'UserController@profile');
Route::delete('user/destroy-account/{id}', 'UserController@destroy');

Route::get('admin/dashboard', 'AdminController@dashboard');
Route::get('admin/coa', 'AdminController@coa');

Route::get('admin/admin/setting', 'AdminController@adminSetting');

