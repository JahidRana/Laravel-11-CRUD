<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

// Base route to show the todo list
Route::get('/', [TodoController::class, 'index'])->name('home');

// CRUD routes for TodoController
Route::resource('todos', TodoController::class);