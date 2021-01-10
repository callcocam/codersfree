<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Instructor\CourseController;
Route::redirect('/', 'instrutor/cursos');
Route::resource('courses', CourseController::class)->names('courses');

//Route::get('/cursos', InstructorCourses::class)->middleware("can:Ler Curso")->name('courses.index');
