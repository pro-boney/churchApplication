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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('pages.index');
});
Route::get('/testimony', 'TestimonyController@index')->name('testimony');
Route::get('/testimonyDetail/{id}', 'TestimonyDetailController@index')->name('testimonyDetail');

Route::get('group/{id}', 'GroupController@index')->name('group');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
