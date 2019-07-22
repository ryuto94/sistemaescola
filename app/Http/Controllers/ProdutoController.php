<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public function listarTodos(Request $request){
        $listarProdutos = Produto::paginate(5);

        return view('produtos', ['produtos' =>$listarProdutos]);
    }
}
