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
Route::namespace('Front')->group(function(){
    Route::get('/','HomePageController@index')->name('front.homepage');
    Route::get('/course/cat/{id}','CourseController@cat')->name('front.cat');
    
    Route::get('/course/cat/{id}/course/{c_id}','CourseController@show')->name('front.show');
    Route::get('/contact','ContactController@index')->name('front.contact');
    Route::post('/message/newsletter','MessageController@newsletter')->name('front.message.newsletter');
    Route::post('/message/contact','MessageController@contact')->name('front.message.contact');
    Route::post('/message/enroll','MessageController@enroll')->name('front.message.enroll');

});

Route::namespace('Admin')->prefix('dashbord')->group(function(){

Route::get('login','AuthController@login')->name('admin.login');
Route::post('dologin','AuthController@dologin')->name('admin.dologin');





Route::middleware('adminAuth:admin')->group(function(){


    Route::get('/logout','AuthController@logout')->name('admin.logout');

    Route::get('/','HomeController@index')->name('admin.home');


    Route::get('/cats','CatController@index')->name('admin.cats.index');
    Route::get('/cats/create','CatController@create')->name('admin.cats.create');
    Route::post('/cats/store','CatController@store')->name('admin.cats.store');
    Route::get('/cats/edit/{id}','CatController@edit')->name('admin.cats.edit');
    Route::post('/cats/update','CatController@update')->name('admin.cats.update');
    Route::get('/cats/delete/{id}','CatController@delete')->name('admin.cats.delete');

    Route::get('/trainers','TrainerController@index')->name('admin.trainers.index');
    Route::get('/trainers/create','TrainerController@create')->name('admin.trainers.create');
    Route::post('/trainers/store','TrainerController@store')->name('admin.trainers.store');
    Route::get('/trainers/edit/{id}','TrainerController@edit')->name('admin.trainers.edit');
    Route::post('/trainers/update','TrainerController@update')->name('admin.trainers.update');
    Route::get('/trainers/delete/{id}','TrainerController@delete')->name('admin.trainers.delete');


    Route::get('/courses','CourseController@index')->name('admin.courses.index');
    Route::get('/courses/create','CourseController@create')->name('admin.courses.create');
    Route::post('/courses/store','CourseController@store')->name('admin.courses.store');
    Route::get('/courses/edit/{id}','CourseController@edit')->name('admin.courses.edit');
    Route::post('/courses/update','CourseController@update')->name('admin.courses.update');
    Route::get('/courses/delete/{id}','CourseController@delete')->name('admin.courses.delete');






});






});