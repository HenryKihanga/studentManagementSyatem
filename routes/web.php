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


Route::get('/staff/discipline/details', function () {
return view('staff/discipline/details');
});



// routes za academic teacher

Route::Get('/' ,function(){

    return view('class.formOne.index');
});

Route::get('class/formOne/index', function () {
 return view('class.formOne.index');
});

Route::get('class/formTwo/index', function () {
 return view('class.formTwo.index');
});

Route::get('class/formThree/index', function () {
 return view('class.formThree.index');
});

Route::get('class/formFour/index', function () {
 return view('class.formFour.index');
});

Route::get('class/formFive/index', function () {
 return view('class.formFive.index');
});

Route::get('class/formSix/index', function () {
 return view('class.formSix.index');
});

Route::get('staff/academic/schoolOverAllResults', function () {
 return view('staff/academic/schoolOverAllResults');
});

Route::get('staff/academic/details' , function(){

    return view('staff/academic/details');
});
