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

Route::get('user/dashboard', 'UserController@dashboard')->middleware(cek_login::class);
Route::get('user/dictionary', 'DictionaryController@index');
Route::get('user/journal', 'JournalController@index');
Route::get('user/profile', 'UserController@profile')->middleware(cek_login::class);
Route::delete('user/destroy-account/{id}', 'UserController@destroy')->middleware(cek_login::class);

Route::get('admin/dashboard', 'AdminController@dashboard')->middleware(cek_login::class);

Route::get('admin/coa', 'AdminController@coa');
Route::delete('admin/coa/destroy/{id}', 'AdminController@coadestroy');
Route::put('/admin/coa/update/{id}', 'AdminController@updatecoa');
Route::put('/admin/coa/store', 'AdminController@storecoa');

Route::get('admin/dictionary', 'AdminController@dictionary');
Route::delete('admin/dictionary/destroy/{id}', 'AdminController@dictionarydestroy');
Route::put('/admin/dictionary/update/{id}', 'AdminController@updatedictionary');
Route::put('/admin/dictionary/store', 'AdminController@storedictionary');


Route::get('admin/journal', 'AdminController@coa');

Route::get('admin/system-log', 'AdminController@coa');

Route::get('admin/post', 'AdminController@coa');

Route::get('admin/transaction', 'AdminController@coa');

Route::get('admin/admin/setting', 'AdminController@adminSetting');
Route::put('admin/admin/setting/update/{id}', 'AdminController@updateadmin');
Route::get('admin/user/setting', 'AdminController@userSetting');
Route::delete('admin/user/setting/destroy-account/{id}', 'AdminController@userDelete');
Route::put('admin/user/setting/update/{id}', 'AdminController@updateuser');

