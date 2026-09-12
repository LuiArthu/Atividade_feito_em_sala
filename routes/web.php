<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// rotas do CRUD
Route::resource('/produtos', ProdutoController::class);
