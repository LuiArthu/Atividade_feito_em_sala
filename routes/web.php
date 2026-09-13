<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// rotas do CRUD
Route::resource('/produtos', ProdutoController::class);
Route::resource('categorias', CategoriaController::class);
