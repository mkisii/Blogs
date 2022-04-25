<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionsController;

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


Route::get('/', [PagesController::class, 'index']);


Auth::routes();

Route::get('/', [QuestionsController::class, 'index'])->name('home');
Route::get('/questions',[QuestionsController::class, 'index'])->name('questions.index');
Route::get('/questions/create', [QuestionsController::class, 'create'])->name('questions.create');
Route::get('/questions/show{id}',[QuestionsController::class, 'show'])->name('questions.show');
Route::post('/questions/store', [QuestionsController::class, 'store'])->name('questions.store');
Route::get('/questions/edit{id}',[QuestionsController::class, 'edit'])->name('questions.edit');

