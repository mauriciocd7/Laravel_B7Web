<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    
    public function index(){
        $nome = 'Mauricio';
        $data = [
            'nome' => $nome,
            'html' => '<b style="color:red">bold</b>'
        ];

        $array = [
            'ingredientes' => [
                'farinha',
                'ovos',
                'cenoura',
                'ovos 2'
            ]
        ];


        return view('aulaBlade', $data, $array);

    }
}
