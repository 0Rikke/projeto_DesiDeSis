<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarrinhoController extends Controller
{
    function index($id){


        $pedidos = DB::table('pedidos')
        ->leftJoin('livros', 'pedidos.idLivro', '=', 'livros.id')
        ->get();


        return view('carrinho.index',['pedidos'=>$pedidos]);
    }

}
