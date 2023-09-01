<?php

namespace App\Http\Controllers;

use App\Models\CalculoDeCombustivel;
use Illuminate\Http\Request;

class CombustivelController extends Controller
{
    public function index()
    {

        return view('consumo');

    }

    public function gasto()
    {
        $CalculoDeCombustivel = new CalculoDeCombustivel();

        $valor = $CalculoDeCombustivel->calcular();

        return view('resultado', ['valor' => $valor]);

    }
}
