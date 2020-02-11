<?php

/*  
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| 
|
*/

Route::get('/demo','DemoController@index');
Route::post('/demo/show','DemoController@store')->name('demo.store');

Route::get('/','DarpanController@index');

Route::post('form','DarpanController@store')->name('form.store');
Route::get('/printForm','DarpanController@printForm')->name('form.printForm');





Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});




