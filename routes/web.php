<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Rotas de Cadastro
Route::get('/cadastro', [AuthController::class, 'showRegister'])->name('cadastro.view');
Route::post('/cadastro', [AuthController::class, 'cadastrar'])->name('cadastro.post');

// Rotas de Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.view');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
