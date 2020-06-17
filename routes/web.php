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



Route::get('/discipline', function () {
    return view('staff.discipline.disciplineSideBar');
});





// routes za academic teacher
Route::Get('/academic' ,function(){

    return view('staff.academic.academicSideBar');
});




// ROUTES ZA HEADMASTER
Route::get('/headmaster' , function(){

    return view('staff.headMaster.headMasterSideBar');
});


// ROUTES ZA MWALIMU WA DARASA

Route::get('/teacher' , function(){

    return view('staff.teacher.teacherSideBar');
});




