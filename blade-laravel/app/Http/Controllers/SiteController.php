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

        return view('aulaBlade', $data);

    }
}
