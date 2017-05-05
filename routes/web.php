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
Route::get(['middleware'=>'auth','namespace'=>'Portal'],function(){

  Route::get('blogs','BlogController@index.php');
  Route::get('blogs/information/{id}','BlogController@information');
});
