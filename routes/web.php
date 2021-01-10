<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Livewire\CourseStatus;
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

Route::get('/', HomeController::class)->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/cursos', [CourseController::class, 'index'])->name('courses.index');


Route::get('/curso/{course}', [CourseController::class, 'show'])->name('courses.show');

Route::post('/cursos/{course}/matricular', [CourseController::class, 'enrolled'])->middleware(['auth:sanctum'])->name('courses.enrolled');


Route::get('/curso/{course}/status', CourseStatus::class)->middleware(['auth:sanctum'])->name('courses.status');
