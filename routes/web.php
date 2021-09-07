<?php

use App\Http\Controllers\BranchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CoursefeeController;
use App\Http\Controllers\FormalityController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AccountantController;
use App\Http\Controllers\LoginController;

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
    return view('home');
});

Route::get('login',[LoginController::class,'showLoginForm'])->name('login');
Route::post('login',[LoginController::class,'login']);
Route::get('checkout',[AccountantController::class,'checkout']);
Route::get('logout',[LoginController::class,'logout'])->name('logout');

Route::get('/manage/branch/list',[BranchController::class,'list']);
Route::get('manage/branch/insert',[BranchController::class,'insertBranch']);
Route::post('manage/branch/insert',[BranchController::class,'createBranch']);
Route::get('manage/branch/update/{id}',[BranchController::class,'getData']);
Route::post('manage/branch/update/{id}',[BranchController::class,'updateBranch']);

Route::get('/class',function(){
    return view ('class.list');
});
Route::get('/delete/{id}', [BranchController::class,'deleteBranch']) ;
Route::get('/edit/{id}',[BranchController::class,'editBranch']);
Route::post('/edit/{id}',[BranchController::class,'updateBranch']);
Route::post('/edit/update/{id}',[BranchController::class,'updateBranch']);



Route::get('manage/class/list',[ClassController::class,'list']);
Route::get('manage/class/create',[ClassController::class,'create']);
Route::post('manage/class/create',[ClassController::class,'createClass']);
Route::get('manage/class/edit/{MaL}',[ClassController::class,'edit']);
Route::post('manage/class/edit/{MaL}',[ClassController::class,'editClass']);


Route::get('manage/course/list',[CourseController::class,'list']);
Route::get('manage/course/create',[CourseController::class,'createCourse']);
Route::post('manage/course/create',[CourseController::class,'createCourse']);
Route::get('manage/course/delete/{MaK}', [CourseController::class,'deleteCourse']) ;
Route::get('manage/course/update/{MaK}',[CourseController::class,'edit']);
Route::post('manage/course/update/{MaK}',[CourseController::class,'editCourse']);

Route::get('manage/coursefee/list',[CoursefeeController::class,'list']);
Route::get('manage/coursefee/create',[CoursefeeController::class,'create']);
Route::post('manage/coursefee/create',[CoursefeeController::class,'createcf']);

Route::get('manage/formality/list',[FormalityController::class,'list']);
Route::get('manage/formality/create',[FormalityController::class,'create']);
Route::get('manage/formality/edit',[FormalityController::class,'create']);

Route::get('manage/student/list',[StudentController::class,'list']);
Route::get('manage/student/create',[StudentController::class,'create']);
Route::post('manage/student/create',[StudentController::class,'createStudent']);
Route::get('manage/student/edit/{MaSV}',[StudentController::class,'edit']);
Route::post('manage/student/edit/{MaSV}',[StudentController::class,'edit']);





