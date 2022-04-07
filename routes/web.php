<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('begin', [StudentController::class, 'begin']);
Route::post('enter-grades', [StudentController::class, 'enterGrades']);
Route::post('compute-grades', [StudentController::class, 'computeGrades']);
