<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [App\Http\Controllers\TodoController::class,'index'])->name('index');

//Routes in detail
Route::resource('todo',TodoController::class);

Route::get('show/{id}',[App\Http\Controllers\TodoController::class,'show'])->name('show');
