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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('users', 'UserController');

Route::resource('accountants', 'accountantController');

Route::resource('classes', 'classController');

Route::resource('clubs', 'clubController');

Route::resource('designations', 'designationController');

Route::resource('dorms', 'dormController');

Route::resource('exams', 'examController');

Route::resource('fees', 'feeController');

Route::resource('librarians', 'librarianController');

Route::resource('miscs', 'miscController');

Route::resource('notifications', 'notificationController');

Route::resource('parents', 'parentController');

Route::resource('payments', 'paymentController');

Route::resource('results', 'resultsController');

Route::resource('students', 'studentController');

Route::resource('teachers', 'teacherController');