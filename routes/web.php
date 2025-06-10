<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index'])->name("tasks.index");
Route::get('/tasks', [TaskController::class, 'index'])->name("tasks.index");
Route::get('/tasks/{id}', [TaskController::class, 'show'])->name("task.show");
Route::post('/tasks/create', [TaskController::class, 'store'])->name("tasks.store");
Route::put('/tasks/{id}/update', [TaskController::class, 'update'])->name("task.update");
Route::delete('/tasks/{id}', [TaskController::class, 'delete'])->name('task.delete');
