<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UMSController;

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

Route::get('/',[PagesController::class,'home'])->name('home');
Route::get('/about',[PagesController::class,'about'])->name('about');
Route::get('/student/all',[StudentController::class,'list'])->name('student.list');
Route::get('/student/details/{id}/info',[StudentController::class,'details'])->name('student.details');
Route::get('/student/create',[StudentController::class,'create'])->name('student.create');
Route::post('/student/create',[StudentController::class,'createSubmit'])->name('student.create.submit');
Route::get('/department',[DepartmentController::class,'create'])->name('dept.create');


//
Route::get('/ums/student/list',[UMSController::class,'list'])->name('ums.student.list');
Route::get('/ums/student/create',[UMSController::class,'create'])->name('ums.student.create');
Route::post('/ums/student/create',[UMSController::class,'createSubmit'])->name('ums.student.create');
Route::get('/ums/department/',[UMSController::class,'department'])->name('ums.dept.ind');

Route::get('/ums/student/login',[UMSController::class,'login'])->name('ums.login');
Route::post('/ums/student/login',[UMSController::class,'loginSubmit'])->name('ums.login.submit');
Route::get('/ums/student/dashboard',[UMSController::class,'dashboard'])->name('ums.dash')->middleware('logged.user');
Route::get('/logout',function(){
    session()->forget('logged');
    session()->flash('msg','Sucessfully Logged out');
    return redirect()->route('ums.login');
})->name('logout');

