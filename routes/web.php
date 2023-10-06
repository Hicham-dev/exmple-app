<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('students')->group(function () {
    Route::get('/',
        [
            StudentController::class,
            'index'
        ])->name('students.index');

    Route::get('create', [StudentController::class, 'create'])->name('students.create');
    Route::post('/', [StudentController::class, 'store'])->name('students.store');
    Route::get('/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
    Route::patch('/{student}', [StudentController::class, 'update'])->name('students.update');
    Route::delete('/{student}', [StudentController::class, 'destroy'])->name('students.delete');
});
