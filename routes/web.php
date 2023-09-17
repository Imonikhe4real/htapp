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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('contact','ContactController@index');
Route::post('contactconfirm','ContactconfirmController@store');
Route::get('contactconfirm','ContactconfirmController@index');

Route::get('dashboard','DashboardController@index');
Route::get('profile','ProfileController@index');
Route::get('test','TestController@index');

Route::get('mathematics','MathematicsController@index');
Route::post('mathematicsconfirm','MathematicsconfirmController@store');
Route::get('mathematicsconfirm','MathematicsconfirmController@index');


Route::get('english','EnglishController@index');
Route::post('englishconfirm','EnglishconfirmController@store');
Route::get('englishconfirm','EnglishconfirmController@index');

Route::get('physics','PhysicsController@index');
Route::post('physicsconfirm','PhysicsconfirmController@store');
Route::get('physicsconfirm','PhysicsconfirmController@index');

Route::get('chemistry','ChemistryController@index');
Route::post('chemistryconfirm','ChemistryconfirmController@store');
Route::get('chemistryconfirm','ChemistryconfirmController@index');



