<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/',[StudentController::class, 'index'])->name('student.index');
// Use singular resource for a single controller. First parameter should be a string URI (no leading slash).
Route::resource('/student', StudentController::class);

