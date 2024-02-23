<?php

use App\Http\Controllers\DogController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {return view('app');});

Route::post('/dogs', [DogController::class, 'add'])->name('dogs.add');

Route::get('/dogs', [DogController::class, 'index'])->name('dogs.index');
