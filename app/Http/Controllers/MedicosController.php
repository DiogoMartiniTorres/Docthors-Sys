<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicosController extends Controller
{

    public function index()
    {
        $medicos = array(
            array('nome' => 'teste','especialidade' => 'teste','telefone' => 'teste'),
        );

        return view('app.pages.medicos.listar', compact('medicos'));
    }



}
