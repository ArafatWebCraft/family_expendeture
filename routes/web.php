<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();
use App\Http\Controllers\StudentController;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create-student',[StudentController::class,'create_student'])->name('create.student');
Route::post('/student-registration',[StudentController::class,'registration_student'])->name('registration.student');
Route::get('/edit-student/{id}',[StudentController::class,'edit_student'])->name('edit.student');
Route::put('update-student/{id}',[StudentController::class,'update_student'])->name('update.student');
Route::delete('delete-student/{id}',[StudentController::class,'delete_student'])->name('delete.student');
