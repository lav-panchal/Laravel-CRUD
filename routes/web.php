<?php

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

Route::get('/', function () {
    return view('home');
});


Route::post('loginsubmit','Users@loginsubmit');
Route::post('createsubmit','Users@createsubmit');	

Route::get('logout','Users@logout');

	
Route::group(['middleware'=>['LogCheck']],function(){
	Route::get('list','Users@list');
});
Route::group(['middleware'=>['LogCheck2']],function(){
	Route::get('create','Users@create');
	Route::get('login','Users@login');
});

Route::get('deleteuser/{id}','Users@deleteuser');
Route::get('edituser/{id}','Users@edituser');
Route::post('updateuser','Users@updateuser');