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

Route::get('/',function(){

	return redirect()->route('login.index');
});


//login -url
Route::get('/login','loginController@index')->name('login.index');
Route::post('/login','loginController@verify')->name('login.verify');



//home-url
//Route::get('/home','homeController@index')->name('home.index');

//Route::group(['middleware'=>['session']],function(){


//////////         RECEPTIONIST        /////////////////////////////

Route::get('/rhome','receptionistController@index')->name('rhome.index');

//Receptionist-showall
Route::get('/receptionist/showalltoSupervisor/','receptionistController@showalltoSupervisor')->name('receptionist.showalltoSupervisor');

//REceptionist-Create
Route::get('/receptionist/create','receptionistController@create')->name('receptionist.create');
Route::post('/receptionist/create','receptionistController@store')->name('receptionist.store');

//Search
Route::get('/receptionist/searchByName/{name}','receptionistController@searchByName')->name('receptionist.searchByName');

// Delete Receptionist
Route::get('/receptionist/{id?}/destroy','receptionistController@destroy')->name('receptionist.destroy');

Route::get('/logout','logoutController@index')->name('logout.index');

//});

//////////////     PATIENT      ////////////////////
//Patient-Create
Route::get('/patient/create','patientController@create')->name('patient.create');
Route::post('/patient/create','patientController@store')->name('patient.store');

//Patient-Show-All
Route::get('/patient/showall/','patientController@showall')->name('patient.showall');

// ALL my Patient
Route::get('/patient/showmypatient/','patientController@showmypatient')->name('patient.showmypatient');

//Patient-Edit-by-doctor
Route::get('/patient/{id}/editByDoc','patientController@editByDoc')->name('patient.editByDoc');
Route::post('/patient/{id}/editByDoc','patientController@updateByDoc')->name('patient.updateByDoc');

Route::get('/patient/searchByName/{name}','patientController@searchByName')->name('patient.searchByName');

//patient-Edit
Route::get('/patient/{id}/edit','patientController@edit')->name('patient.edit');
Route::post('/patient/{id}/edit','patientController@update')->name('patient.update');

//Route::get('/patient/errorName','patientController@errorName')->name('patient.errorName');


////////////        DOCTOR      //////////////////////

//Doctors-Show-All-for-Receptionist
Route::get('/doctor/showall/','doctorController@showall')->name('doctor.showall');
Route::get('/doctor/showalltoSupervisor/','doctorController@showalltoSupervisor')->name('doctor.showalltoSupervisor');

Route::get('/doctor/searchByName/{name}','doctorController@searchByName')->name('doctor.searchByName');

Route::get('/dhome','doctorController@index')->name('dhome.index');

Route::get('/doctor/profile','doctorController@profile')->name('doctor.profile');

//Doctor-Edit
Route::get('/doctor/{did}/edit','doctorController@edit')->name('doctor.edit');
Route::post('/doctor/{did}/edit','doctorController@update')->name('doctor.update');

//Doctor-Create
Route::get('/doctor/create','doctorController@create')->name('doctor.create');
Route::post('/doctor/create','doctorController@store')->name('doctor.store');

//Delete-doctor
Route::get('/doctor/{id?}/destroy','doctorController@destroy')->name('doctor.destroy');


//////////////     SUPERVISOR     ///////////////////

Route::get('/shome','supervisorController@index')->name('shome.index');

//SUpervisor-Show-Profile
Route::get('/supervisor/{id}/show/','supervisorController@show')->name('supervisor.show');

//Supervisor-Edit
Route::get('/supervisor/{id}/edit','supervisorController@edit')->name('supervisor.edit');
Route::post('/supervisor/{id}/edit','supervisorController@update')->name('supervisor.update');



//////////////     Room      ////////////////////
//Room-Create
Route::get('/room/create','roomController@create')->name('room.create');
Route::post('/room/create','roomController@store')->name('room.store');

/// Room-Show
Route::get('/room/show/','roomController@show')->name('room.show');
Route::get('/room/showEmpty/','roomController@showEmpty')->name('room.showEmpty');

//Room-Delete
//Route::get('/user/{id}/delete','userController@delete')->name('user.delete');
Route::get('/room/{id?}/destroy','roomController@destroy')->name('room.destroy');

Route::get('/room/searchById/{id}','roomController@searchById')->name('room.searchById');



/////////////////   Admin /////////////////

Route::get('/ahome','AdminController@index')->name('ahome.index');

Route::get('/admin/show/','AdminController@show')->name('admin.show');