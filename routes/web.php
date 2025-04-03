<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'index'])->name('index');

Route::get('/contatos', [PrincipalController::class, 'contato'])->name('contatos');

Route::get('/cursos', [CursoController::class, 'curso'])->name('cursos');

Route::get('/departamentos', [DepartamentoController::class, 'departamento'])->name('departamentos');

