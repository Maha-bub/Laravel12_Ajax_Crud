<?php

use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/',[StudentController::class, 'index'])->name('student.index');
// Use singular resource for a single controller. First parameter should be a string URI (no leading slash).
Route::resource('/student', StudentController::class);


// Route::resource('/student', StudentController::class);



Route::get('notification', [NotificationController::class, 'index']);
Route::get('notification/{type}', [NotificationController::class, 'notification'])->name("notification");

Route::resource('product', ProductController::class, );