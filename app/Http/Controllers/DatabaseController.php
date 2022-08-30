<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    function pesquisa(){
        return view("php.pesquisa");
    }
    function categoria(){
        return view("php.categoria");
    }
}
