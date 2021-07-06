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
/*----------------------------------register//login----------------------------------------*/
Route::get('create','Sitecontroller@create');
Route::post('store','Sitecontroller@store');
/*login part*/
Route::get('index','Sitecontroller@index');
Route::post('checklogin','Sitecontroller@checklogin');
/*----------------------------------search//show----------------------------------------*/
Route::get('','SearchController@search');
Route::post('searchengin','SearchController@searchengin');
Route::get('comment/{id}','SearchController@comment');
/*----------------------------------view and send comment------------------------------------*/
// Route::get('showcomment','SearchController@showcomment');
Route::get('creates','SearchController@creates');
Route::post('stores','SearchController@stores');
/*----------------------------------Admin ------------------------------------*/
Route::get('adminlogin','Admincontroller@adminlogin');
Route::post('check','Admincontroller@check');
/*----------------------------------Admin profile ------------------------------------*/
Route::get('admin','Adminprofilecontroller@admin');
Route::get('viewuser','Adminprofilecontroller@viewuser');
Route::get('viewproduct','Adminprofilecontroller@viewproduct');
Route::post('insert_product', 'Adminprofilecontroller@insert_product');





