<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware'=>'auth:api'],function(){
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/clinic/create', 'ClinicController@store');
    Route::POST('/diagnose/create', 'DiagnosesController@store');
    Route::POST('/appoiment/create', 'AppoimentController@store');
    Route::POST('/drug/create', 'DrugController@store');
    Route::POST('/laboratory/create', 'LaboratoryController@store');
    Route::POST('/radiology/create', 'RadiologyController@store');
    Route::get('/doctors', 'DoctorController@index');
    Route::get('/doctor/patients', 'DoctorController@getPatient');
    Route::get('/doctor/diagnoses', 'DoctorController@getdiagnoses');
    Route::get('/patients', 'PatientController@index');
    Route::get('/clinic', 'ClinicController@index');
    Route::get('/drug', 'DrugController@index');
    Route::get('/laboratory', 'LaboratoryController@index');
    Route::get('/radiology', 'RadiologyController@index');
    Route::POST('/appoiment/drug', 'AppoimentController@attachDrug');
    Route::POST('/appoiment/radiology', 'AppoimentController@attachRadiology');
    Route::POST('/appoiment/laboratory', 'AppoimentController@attachLaboratory');

});

Route::POST('/login', 'loginController@login')->name('login');

Auth::routes();








