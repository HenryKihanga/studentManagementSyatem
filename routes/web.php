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
    return view('staff.discipline.index');
});

Route::get('/student/studentRegistration', function () {
return view('student/studentRegistration');
});

Route::get('/student/viewAllStudents', function () {
return view('student/viewAllStudents');
});

Route::get('/student/suspendedAndBlacklistedStudents', function () {
return view('student/suspendedAndBlacklistedStudents');
});

Route::get('/student/punishedStudents', function () {
return view('student/punishedStudents');
});


Route::get('/staff/staffDetails', function () {
return view('staff/staffDetails');
});
