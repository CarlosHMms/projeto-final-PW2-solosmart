<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TableController;

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

/*Route::get('/', function () {
    return view('recordtable');
});*/


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'autenticacao']);

Route::get('/cadastro', [AuthController::class, 'cadastro'])->name('cadastro');
Route::post('/cadastro', [AuthController::class, 'register']);

Route::get('/perfil', [ProfileController::class, 'perfil'])->name('perfil');
Route::post('/perfil', [ProfileController::class, 'update']);

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/tabelas', [TableController::class, 'tabelas'])->name('tables');

/*Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::get('/tabelas', [TableController::class, 'tabelas'])->name('tables');
    Route::get('/perfil', [ProfileController::class, 'perfil'])->name('perfil');
    Route::post('/perfil', [ProfileController::class, 'update']);
});*/