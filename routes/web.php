<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\SaranPekerjaanController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AppController::class, 'index']);
Route::get('/diagnose', [AppController::class, 'hasilTes'])->middleware('auth');
Route::get('/about', [AppController::class, 'about']);
Route::get('/artikelsPage', [AppController::class, 'artikel']);

// Tambahkan rute untuk halaman hasil tes
Route::get('/hasil-tes', [AppController::class, 'hasilTes'])->name('hasilTes')->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'store']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'user'])->middleware('auth');
Route::get('/adminDashboard', [DashboardController::class, 'admin'])->middleware('admin');

Route::get('/rules', [AppController::class, 'logicRelation']);
Route::get('/rules/{id}/edit', [AppController::class, 'edit']);
Route::post('/rules-change', [AppController::class, 'update']);

Route::post('/submit-answer/{id}', [AppController::class, 'forwardChaining']);
Route::post('/submit-answer-guest', [AppController::class, 'forwardChainingGuest']);

Route::resources([
    'pertanyaans' => PertanyaanController::class,
    'jurusans' => JurusanController::class,
    'saranpekerjaans' => SaranPekerjaanController::class,
    'artikels' => ArtikelController::class,
    'users' => UserController::class,
]);
