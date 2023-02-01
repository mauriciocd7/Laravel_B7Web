<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

//Cada rota referencia endereço de cada controller.
Route::get('/', [SiteController::class, 'index']);
Route::get('/sair', [SiteController::class, 'exit']); //referencia o caminho url '/', class e o método.
Route::get('/users/{qnt}', [SiteController::class, 'users']);

// O router NÂO deve ter acesso a view. Por default ele tem e deve-se configurar para que o controller tenha esse papel.
// Vem como default do laravel, deve-se alterar para o modelo de código acima caso queira usar o MVC.
//Route::get('/', function () {
//    return 'Estou no router';
//});
  