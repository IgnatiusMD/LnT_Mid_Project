<?php

use App\Http\Controllers\HomeController;
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
//     return view('home');
// });

Route::get('/','HomeController@view')->name('library.home');
Route::get('/create','HomeController@create');
Route::post('/create','HomeController@store')->name('library.create');
Route::get('/edit/{id}','HomeController@edit')->name('library.edit');
Route::patch('/edit/{id}','HomeController@update')->name('library.update');
Route::delete('/delete/{id}','HomeController@delete')->name('library.delete');