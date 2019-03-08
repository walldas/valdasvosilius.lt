<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/',['uses'=>'CvtitleController@index','as'=>'cv']);

// Auth::routes();
// Authentication routes...
Route::get('auth/login',['uses'=>'NameController@index','as'=>'names.index']);
// Route::get('auth/login', 'Auth\AuthController@getLogin');
// Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::post('auth/login',['uses'=>'Auth\AuthController@postLogin','as'=>'auth.login']);
// Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/logout',['uses'=>'Auth\AuthController@getLogout','as'=>'auth.logout']);
// Route::get('auth/logout',['uses'=>'Auth\AuthController@getLogout','as'=>'logout']);

// Registration routes...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::get('auth/register',['uses'=>'Auth\AuthController@getRegister','as'=>'auth.register']);
// Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::post('auth/register',['uses'=>'Auth\AuthController@postRegister','as'=>'post.register']);


//Name lapas
Route::resource('/names','NameController');
// Route::get('/names/{$name}',['uses'=>'NameController@show','as'=>'names.show']);

// Route::resource('/','NameController');
Route::resource('/home','NameController');
//cv lapas
Route::get('/cv',['uses'=>'CvtitleController@index','as'=>'cvLapas']);
Route::get('/cv/createtitle',['uses'=>'CvtitleController@createCvtitle','as'=>'cvtitle.btn']);
Route::put('/cv/{cvtitle}',['uses'=>'CvtitleController@updateCvtitle','as'=>'cvtitle.update']);
Route::post('/cv',['uses'=>'CvtitleController@storeCvtitle','as'=>'cvtitle.store']);
Route::get('/cv/{cvtitle}/edittitle',['uses'=>'CvtitleController@editCvtitle','as'=>'cvtitle.edit']);
// //cv apie mane
Route::get('/cva/creatApieamne',['uses'=>'ApiemaneController@create','as'=>'apiemane.create']);
Route::post('/cva',['uses'=>'ApiemaneController@store','as'=>'apiemane.store']);
Route::put('/cva/{apiemane}',['uses'=>'ApiemaneController@update','as'=>'apiemane.update']);
Route::get('/cva/{apiemane}/editApiemane',['uses'=>'ApiemaneController@edit','as'=>'apiemane.edit']);

// //cv igudziai/skills
Route::get('/cvs/createSkil',['uses'=>'SkillController@create','as'=>'skill.create']);
Route::post('/cvs',['uses'=>'SkillController@store','as'=>'skill.store']);
Route::put('/cvs/{skill}',['uses'=>'SkillController@update','as'=>'skill.update']);
Route::get('/cvs/{skill}/editSkill',['uses'=>'SkillController@edit','as'=>'skill.edit']);
Route::delete('/cvs/{skill}',['uses'=>'SkillController@destroy','as'=>'skill.destroy']);
//user
Route::get('/profile',['uses'=>'UserController@profile','as'=>'profile','middleware'=>'auth']);
Route::put('/profilee',['uses'=>'UserController@update','as'=>'profile.update','middleware'=>'auth']);
Route::get('/users',['uses'=>'UserController@index','as'=>'user.index']);
Route::get('/users/show/{user}',['uses'=>'UserController@show','as'=>'user.btn.show']);
Route::get('/userss',['uses'=>'UserController@index','as'=>'user.index']);
Route::delete('/users/{user}',['uses'=>'UserController@destroy','as'=>'user.destroy']);
//cv  darbai
Route::get('/cvj/createJob',['uses'=>'JobController@create','as'=>'job.create']);
Route::post('/cvj',['uses'=>'JobController@store','as'=>'job.store']);
Route::put('/cvj/{job}',['uses'=>'JobController@update','as'=>'job.update']);
Route::get('/cvj/{job}/editJob',['uses'=>'JobController@edit','as'=>'job.edit']);
Route::delete('/cvj/{job}',['uses'=>'JobController@destroy','as'=>'job.destroy']);
// //cv  issilavinimas
Route::get('/cve/createEducation',['uses'=>'EducationController@create','as'=>'education.create']);
Route::post('/cve',['uses'=>'EducationController@store','as'=>'education.store']);
Route::put('/cve/{education}',['uses'=>'EducationController@update','as'=>'education.update']);
Route::get('/cve/{education}/editEducation',['uses'=>'EducationController@edit','as'=>'education.edit']);
Route::delete('/cve/{education}',['uses'=>'EducationController@destroy','as'=>'education.destroy']);
// //cv  pabaigti kursai
Route::get('/cvc/createCourse',['uses'=>'CourseController@create','as'=>'course.create']);
Route::post('/cvc',['uses'=>'CourseController@store','as'=>'course.store']);
Route::put('/cvc/{course}',['uses'=>'CourseController@update','as'=>'course.update']);
Route::get('/cvc/{course}/editCourse',['uses'=>'CourseController@edit','as'=>'course.edit']);
Route::delete('/cvc/{course}',['uses'=>'CourseController@destroy','as'=>'course.destroy']);
// //cv laisvalaikis
Route::get('/cvl/createLeisure',['uses'=>'LeisureController@create','as'=>'leisure.create']);
Route::post('/cvl',['uses'=>'LeisureController@store','as'=>'leisure.store']);
Route::put('/cvl/{leisure}',['uses'=>'LeisureController@update','as'=>'leisure.update']);
Route::get('/cvl/{leisure}/editLeisure',['uses'=>'LeisureController@edit','as'=>'leisure.edit']);
Route::delete('/cvl/{leisure}',['uses'=>'LeisureController@destroy','as'=>'leisure.destroy']);
// //Porfolio Carusel-Slider
Route::resource('/porfolios','PorfolioController');
//Kinu kalendorius-ChineseCalendar
Route::get('/ChineseCalendar',['uses'=>'ChineseCalendarController@index','as'=>'chineseCalendar.index']);
// //kontaktai
Route::get('/Contacts',['uses'=>'ContactController@index','as'=>'contacts.index']);
Route::post('/Contactss',['uses'=>'ContactController@store','as'=>'contacts.store']);
Route::delete('/Contacts/{id}',['uses'=>'ContactController@destroy','as'=>'contacts.destroy']);
//magic Kvadratas
Route::get('/magic',['uses'=>'MagicController@index','as'=>'magic.index']);
//Autobusai
Route::get('/bus',['uses'=>'BusController@index','as'=>'bus.index']);
// matrix
Route::get('/matrix',['uses'=>'MatrixController@index','as'=>'matrix.index']);
