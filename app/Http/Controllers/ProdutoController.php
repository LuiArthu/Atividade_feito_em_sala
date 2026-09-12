<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view('produtos.index',
        compact('produtos'));
    }

    public function show(Produto $produto){
        return view('produtos.show', compact('produto'));
    }

    public function create()
    {
        $produto = new Produto();
        $categorias = Categoria::all();

        return view('produtos.create', compact('produto', 'categorias'));
    }

    public function store(ProdutoRequest $request)
    {

        $dados = $request->validated();

        Produto::create($dados);

        return redirect()
            ->route('produtos.index')
            ->with('success', 'Produto criado!');
    }
}
