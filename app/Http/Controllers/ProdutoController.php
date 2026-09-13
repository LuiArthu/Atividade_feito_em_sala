<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view('produtos.index',
        compact('produtos'));
    }
    public function show($id)
    {
        $produto = Produto::find($id);

        return view('produtos.show', compact('produto'));
    }
}
