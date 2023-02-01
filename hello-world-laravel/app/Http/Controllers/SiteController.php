<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index(){
        // Logica
        // Verificar se usuário existe
        // Buscar dados de um usuário.

        $name = 'testNamexxxx';

        return view('welcome', [
            'nameViewExample' => $name
        ]);
    }
    public function exit(){
        return view('sair');
    }
}
