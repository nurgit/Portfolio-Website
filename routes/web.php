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
Route::get('/','pagesController@index')->name('home');

Route::get('/admin/dashbord','AdminController@dashbord')->name('admin.dashbord');
Route::get('/admin/main','AdminController@main')->name('admin.main');

 Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
