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


Route::get('admin/login','UserController@getLogin');
Route::post('admin/login','UserController@postLogin');
Route::group(['prefix'=>'admin','middleware'=>'check_login'],function(){
    Route::get('dashboard','UserController@dashboard');
    Route::get('logout','UserController@logout');


    Route::resource('category','CategoryController');
    Route::resource('subcategory','SubCategoriesController');
    Route::resource('product','ProductController');
    Route::post('product/add','ProductController@add')->name('product.add');
    Route::resource('productimage','ProductImageController');

    Route::post('getSubcategory','AjaxController@getSubcategory');
    Route::post('getCategory','AjaxController@getCategory');
});
Route::get('/','PagesController@homepage');