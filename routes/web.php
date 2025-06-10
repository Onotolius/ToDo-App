<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index'])->name("tasks.index");
Route::get('/task/{id}', [TaskController::class, 'show'])->name("task.show");
Route::post('/task/store', [TaskController::class, 'store'])->name("task.store");
Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
Route::put('/task/{id}/update', [TaskController::class, 'update'])->name("task.update");
Route::delete('/task/{id}', [TaskController::class, 'delete'])->name('task.delete');
