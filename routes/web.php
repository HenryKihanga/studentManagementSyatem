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
    return view('staff.discipline.disciplineSideBar');
});





// routes za academic teacher
// Route::Get('/' ,function(){

//     return view('class.formOne.index');
// });




// ROUTES ZA HEADMASTER

// Route::get('/' , function(){

//     return view('staff/headMaster/headMasterSideBar');
// });




