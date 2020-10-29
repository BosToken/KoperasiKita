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
Route::get('/knowledge', 'UserController@knowledge');

//LOGIN//
Route::get('login', 'UserController@login');
Route::get('logout', 'UserController@logout');

Route::post('register', 'UserController@store');
Route::post('login/check', 'UserController@check');

Route::get('user/dashboard', 'UserController@dashboard')->middleware(cek_login::class);

Route::get('user/coa', 'CoaController@index')->middleware(cek_login::class);
Route::put('user/coa/store', 'CoaController@store')->middleware(cek_login::class);

Route::get('user/system-log', 'SystemLogController@index')->middleware(cek_login::class);
Route::put('user/system-log/store', 'SystemLogController@store')->middleware(cek_login::class);

Route::get('user/post', 'PostController@index')->middleware(cek_login::class);
Route::put('user/post/store', 'PostController@store')->middleware(cek_login::class);

Route::get('user/transaction', 'TransactionController@index')->middleware(cek_login::class);
Route::put('user/transaction/store', 'TransactionController@store')->middleware(cek_login::class);

Route::get('user/dictionary', 'DictionaryController@index')->middleware(cek_login::class);
Route::put('user/dictionary/store', 'DictionaryController@store')->middleware(cek_login::class);

Route::get('user/journal', 'JournalController@index')->middleware(cek_login::class);
Route::put('user/journal/store', 'JournalController@store')->middleware(cek_login::class);

Route::get('user/profile', 'UserController@profile')->middleware(cek_login::class);
Route::delete('user/destroy-account/{id}', 'UserController@destroy')->middleware(cek_login::class);

Route::get('admin/dashboard', 'AdminController@dashboard')->middleware(Admin_check::class);

Route::get('admin/coa', 'AdminController@coa')->middleware(Admin_check::class);
Route::delete('admin/coa/destroy/{id}', 'AdminController@coadestroy')->middleware(Admin_check::class);
Route::put('/admin/coa/update/{id}', 'AdminController@updatecoa')->middleware(Admin_check::class);
Route::put('/admin/coa/store', 'AdminController@storecoa')->middleware(Admin_check::class);

Route::get('admin/dictionary', 'AdminController@dictionary')->middleware(Admin_check::class);
Route::delete('admin/dictionary/destroy/{id}', 'AdminController@dictionarydestroy')->middleware(Admin_check::class);
Route::put('/admin/dictionary/update/{id}', 'AdminController@updatedictionary')->middleware(Admin_check::class);
Route::put('/admin/dictionary/store', 'AdminController@storedictionary')->middleware(Admin_check::class);


Route::get('admin/journal', 'AdminController@journal')->middleware(Admin_check::class);
Route::delete('admin/journal/destroy/{id}', 'AdminController@journaldestroy')->middleware(Admin_check::class);
Route::put('/admin/journal/update/{id}', 'AdminController@updatejournal')->middleware(Admin_check::class);
Route::put('/admin/journal/store', 'AdminController@storejournal')->middleware(Admin_check::class);

Route::get('admin/system-log', 'AdminController@systemLog')->middleware(Admin_check::class);
Route::delete('admin/system-log/destroy/{id}', 'AdminController@systemLogdestroy')->middleware(Admin_check::class);
Route::put('/admin/system-log/update/{id}', 'AdminController@updatesystemLog')->middleware(Admin_check::class);
Route::put('/admin/system-log/store', 'AdminController@storesystemLog')->middleware(Admin_check::class);

Route::get('admin/post', 'AdminController@post')->middleware(Admin_check::class);
Route::delete('admin/post/destroy/{id}', 'AdminController@postdestroy')->middleware(Admin_check::class);
Route::put('/admin/post/update/{id}', 'AdminController@updatepost')->middleware(Admin_check::class);
Route::put('/admin/post/store', 'AdminController@storepost')->middleware(Admin_check::class);

Route::get('admin/transaction', 'AdminController@transaction')->middleware(Admin_check::class);
Route::delete('admin/transaction/destroy/{id}', 'AdminController@transactiondestroy')->middleware(Admin_check::class);
Route::put('/admin/transaction/update/{id}', 'AdminController@updatetransaction')->middleware(Admin_check::class);
Route::put('/admin/transaction/store', 'AdminController@storetransaction')->middleware(Admin_check::class);

Route::get('admin/admin/setting', 'AdminController@adminSetting')->middleware(Admin_check::class);
Route::put('admin/admin/setting/update/{id}', 'AdminController@updateadmin')->middleware(Admin_check::class);
Route::get('admin/user/setting', 'AdminController@userSetting')->middleware(Admin_check::class);
Route::delete('admin/user/setting/destroy-account/{id}', 'AdminController@userDelete')->middleware(Admin_check::class);
Route::put('admin/user/setting/update/{id}', 'AdminController@updateuser')->middleware(Admin_check::class);

