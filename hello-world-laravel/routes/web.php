<?php

use Illuminate\Support\Facades\Route;

/*
 O router NÂO deve ter acesso a view. Por default ele tem e deve-se configurar para que o controller tenha esse papel.
*/

Route::get('/', function () {
    return 'Estou no router';
});
