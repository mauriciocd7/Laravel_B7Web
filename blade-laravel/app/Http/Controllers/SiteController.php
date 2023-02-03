<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    
    public function index(){
        $nome = 'Mauricio';
        $data = [
            'nome' => $nome
        ];

        return view('aulaBlade');

    }
}
