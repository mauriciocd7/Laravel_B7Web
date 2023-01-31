<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SiteController::class, 'index']);
Route::get('/', [sairController::class, 'sair']);

// O router NÂO deve ter acesso a view. Por default ele tem e deve-se configurar para que o controller tenha esse papel.
// Vem como default do laravel, deve-se alterar para o modelo de código acima caso queira usar o MVC.
//Route::get('/', function () {
//    return 'Estou no router';
//});
  