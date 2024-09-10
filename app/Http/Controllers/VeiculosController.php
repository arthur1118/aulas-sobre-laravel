<?php

namespace App\Http\Controllers;

use App\Models\Veiculos;
use Illuminate\Http\Request;

class VeiculosController extends Controller
{
    public function index(){
        //Recupera todos os registro da tabela
        $veiculos = Veiculos::all();
        return view('veiculos.index', ['veiculos' => $veiculos]);
    }
}
