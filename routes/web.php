<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('webpage');
});

Auth::routes();


Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


    Route::resource('admin', AdminController::class);

    Route::resource('student', StudentController::class);
    
    Route::resource('teacher', TeacherController::class);
    
    Route::resource('course', CourseController::class);
    
    Route::resource('dashboard', LayoutController::class);
    
    Route::resource('subject', SubjectController::class);
    
    Route::resource('enrollment', EnrollmentController::class);
    
    Route::resource('payment', PaymentController::class);

  

    