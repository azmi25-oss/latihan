<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::resource('student', StudentController::class); 
    return view('welcome');


Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');
Route::get('/student/{Student}/edit', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/student/{Student}', [StudentController::class, 'update'])->name('student.update');
Route::delete('/student/{Student}', [StudentController::class, 'destroy'])->name('student.destroy');






