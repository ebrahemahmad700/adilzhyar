<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;


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
 

Route::get('/adminDashbord', [App\Http\Controllers\DoctorController::class, 'index']);
Route::post('/insert-doctor', [App\Http\Controllers\DoctorController::class, 'create']);
Route::get('/updatedoctor/{id}', [App\Http\Controllers\DoctorController::class, 'DoctorDetail']);
Route::post('/update-doctor', [App\Http\Controllers\DoctorController::class, 'update']);
Route::get('/deletedoctor/{id}', [App\Http\Controllers\DoctorController::class, 'delete']);
Route::get('/loginscr', [App\Http\Controllers\ApoinntmentController::class, 'index']);
Route::post('/loginscr', [App\Http\Controllers\ApoinntmentController::class, 'login']);
Route::post('/loginadmin', [App\Http\Controllers\ApoinntmentController::class, 'loginadmin']);
Route::get('/loginadmin', [App\Http\Controllers\ApoinntmentController::class, 'loginadm']);

Route::get('/scrter', [App\Http\Controllers\DoctorController::class, 'scrter']);
Route::get('/tct/{id}', [App\Http\Controllers\ApoinntmentController::class, 'tct']);

Route::post('/addtct', [App\Http\Controllers\ApoinntmentController::class, 'addapoint']);


Route::get('/logoutscrter', [App\Http\Controllers\ApoinntmentController::class, 'logoutscr']);
Route::get('/logoutadmin', [App\Http\Controllers\ApoinntmentController::class, 'logoutadmin']);
// amana bo routingakaya
Route::get('/',function(){
  return view('index');
});
Route::get('/sickness',function(){
   return view('sickness');
});
Route::get('/alldoctor', [App\Http\Controllers\DoctorController::class, 'doctors']);

Route::get('/about',function(){
   return view('about');
});
Route::get('/contact',function(){
   return view('contact');
});



 
