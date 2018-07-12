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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'localization', 'prefix' => Session::get('locale')], function() {

      Auth::routes();

      Route::get('/home', 'HomeController@index');

      Route::post('/lang', [
          'as' => 'switchLang',
          'uses' => 'LangController@postLang',
      ]);

      Route::get('/', function () {
          return view('welcome');
      });
  });