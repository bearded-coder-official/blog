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

Route::get('/', 'HomeController@home')->name('home.index');

Route::get('/services', 'ServicesController@services')->name('services');
Route::get('/service/{slug}', 'ServicesController@service')->name('service');

Route::get('/contact', 'ContactUsController@index')->name('contacts');


Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::get('/categories/add', 'CategoryController@add')->name('categories.add');
Route::post('/categories/save', 'CategoryController@save')->name('categories.save');
Route::get('/categories/edit/{category}', 'CategoryController@edit')->name('categories.edit');
Route::post('/categories/store/{category}', 'CategoryController@store')->name('categories.store');
Route::get('/categories/delete/{category}', 'CategoryController@delete')->name('categories.delete');

Route::get('/about', function (){

})->name('about');