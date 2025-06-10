<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    return view('index');
})->name('tasks.index');

Route::get('/{id}', function ($id) {
    return 'One single task';
})->name('tasks.show');
