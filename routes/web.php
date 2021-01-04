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
    return view('welcome');
});
/*
Route::get('create','base_controller@create');
Route::get('index/{id}','base_controller@index');
Route::post('submit','base_controller@store')->name('stud_add');
*/
/*
Route::get('student/index','AdvanceController@index');
Route::get('student/create','AdvanceController@create');
Route::post('student/store','AdvanceController@store')->name('store.stud');
Route::get('student/{id}','AdvanceController@show');
Route::get('student/{id}/edit','AdvanceController@edit');
Route::post('student/{id}','AdvanceController@update')->name('update.stud');
*/
Route::resource('student','AdvanceController');
