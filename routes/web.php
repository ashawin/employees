<?php

use Illuminate\Support\Facades\Route;
Auth::routes();

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


Route::group(['middleware' => ['auth']], function(){
	Route::get('/', 'EmployeeController@index')->name('emplist');
	Route::get('/add/employee', 'EmployeeController@create')->name('addemp');
	Route::post('/employee/save', 'EmployeeController@store')->name('saveemp');
	Route::get('/employee/edit/{id}', 'EmployeeController@edit')->name('editemp');
	Route::post('/employee/edit/save/{id}', 'EmployeeController@update')->name('updateemp');
	Route::get('employee/view/{id}', 'EmployeeController@show')->name('empshow');
	Route::get('/employee/delete/{id}', 'EmployeeController@destroy')->name('deleteemp');

});

