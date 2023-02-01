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

        $name      = 'testNamexxxx';
        $age       =  90;
        //dados devem ser utilizados em array para depois repassar para a view.
        $data = [
            'nameViewExample' => $name,
            'age'             => $age];

        return view('welcome', $data);
    }

    //para receber parâmetros pela url deve-se usar a classe Request
    public function users(Request $r){ 
        $data = [
            'quantidade' => $r->qnt //passa o valor qnt que vem da requisição web.php (url);
        ];

        return view('usuarios', $data);
    }

    public function exit(){
        return view('sair');
    }
}
