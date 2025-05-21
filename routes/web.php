<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DepartamentoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [PrincipalController::class, 'index'])->name('index');

Route::get('/contatos', [PrincipalController::class, 'contato'])->name('contatos');

Route::get('/cursos', [CursoController::class, 'curso'])->name('cursos');

Route::get('/departamentos', [DepartamentoController::class, 'departamento'])->name('departamentos');

require __DIR__ . '/auth.php';
