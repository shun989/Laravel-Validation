<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', [PostController::class, 'postNumber']);

Route::post('/store', [PostController::class, 'store'])->name('store');

Route::get('form', function (){
    return view('form');
});

Route::get('/form_validation', [FormController::class, 'checkValidation'])->name('form.submit');

Route::get('/student_list', [StudentController::class, 'index'])->name('studentList');

Route::get('/register', [StudentController::class, 'registerForm'])->name('registerForm');

Route::post('/register', [StudentController::class, 'register'])->name('registerStudent');

Route::get('/delete/{id}', [StudentController::class, 'delete'])->name('deleteStudent');

Route::get('/edit/{id}', [StudentController::class, 'editForm'])->name('editForm');

Route::post('/edit', [StudentController::class, 'update'])->name('updateStudent');
