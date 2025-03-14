<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastrar', [UsuarioController::class, 'cadastrar'])->name('usuario.cadastrar');

Route::post('/salvar', [UsuarioController::class, 'salvar'])->name('usuario.salvar');
