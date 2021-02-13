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

Route::prefix('admin')->group(function(){
//AdminController
    Route::get('/dashbord','AdminController@dashbord')->name('admin.dashbord');
   // Route::get('/services','AdminController@services')->name('admin.services');
    Route::get('/portfolio','AdminController@portfolio')->name('admin.portfolio');
    Route::get('/about','AdminController@about')->name('admin.about');
    Route::get('/contact','AdminController@contact')->name('admin.contact');

    //AdminMainPagesController
    Route::get('/main','AdminMainPagesController@index')->name('admin.main');
    Route::put('/main','AdminMainPagesController@update')->name('admin.main.update');

    //ServicePagesController
    Route::get('/services/create','ServicePagesController@create')->name('admin.services.create');
    Route::post('/services/create','ServicePagesController@store')->name('admin.services.store');
    Route::get('/services/list','ServicePagesController@list')->name('admin.services.list');
    Route::get('/services/edit/{id}','ServicePagesController@edit')->name('admin.services.edit');
    Route::post('/services/update/{id}','ServicePagesController@update')->name('admin.services.update');
    Route::delete('/services/destroy/{id}','ServicePagesController@destroy')->name('admin.services.destroy');
    
    //PortfolioPagesController
    Route::get('/portfolios/create','PortfolioPagesController@create')->name('admin.portfolios.create');
    Route::post('/portfolios/create','PortfolioPagesController@store')->name('admin.portfolios.store');
    Route::get('/portfolios/list','PortfolioPagesController@list')->name('admin.portfolios.list');
    Route::get('/portfolios/edit/{id}','PortfolioPagesController@edit')->name('admin.portfolios.edit');
    Route::post('/portfolios/update/{id}','PortfolioPagesController@update')->name('admin.portfolios.update');
    Route::delete('/portfolios/destroy/{id}','PortfolioPagesController@destroy')->name('admin.portfolios.destroy');
  
});



 Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
