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
/*
Route::get('/', [
    'uses' => 'HomeController@index',
    'as' = 'Home'
    ]);
*/

Route::get('/', 'HomeController@index')->name('Home');


Route::group([
    'prefix' => 'admin',
    'namespace'=> 'Admin',
    'as' => 'admin.'
], function () {
    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/test1', 'IndexController@test1')->name('test1');
    Route::get('/test2', 'IndexController@test2')->name('test2');
});



Route::get('/news', 'NewsController@index')->name('News');
Route::get('/news/{id}', 'NewsController@show')->name('NewsOne');
Route::get('/category','CategoryController@index')->name('Category');
Route::get('/category/{categoryPath}', 'CategoryController@CategoryGetNews')->name('CategoryNews');
