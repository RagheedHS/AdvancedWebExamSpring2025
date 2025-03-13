<?php
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function () {
    return view('students.index');
});

Route::get('/courses', function () {
    return view('courses.index');
});

Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);





Route::get('students/search', [StudentController::class, 'search']);


Route::resource('students', StudentController::class);
