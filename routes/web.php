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

Route::get('cmds','CmdController@index');
Route::get('cmds/create','CmdController@create');
Route::post('cmds','CmdController@store');
Route::get('cmds/{id}/edit','CmdController@edit');
Route::put('cmds/{id}','CmdController@update');
Route::delete('cmds/{id}','CmdController@destroy');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
