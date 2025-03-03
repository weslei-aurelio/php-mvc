<?php

// INCLUIR O AUTOLOAD DAS CLASSES
require __DIR__.'/vendor/autoload.php';

use \App\Http\Router;
use \App\Http\Response;
use \App\Http\Request;
use \App\Controller\Pages\Home;

define('URL', 'http://localhost/php-mvc');

$obRouter = new Router(URL);
$obRequest = new Request();

/**
 * A partir do momento em que foi instânciado o objeto:
 * $url = http://localhost/php-mvc
 * 
 * Instância de Request:
 * queryParams: se houver
 * postVars: se houver
 * headers: função PHP para capturar todos os headers recebidos
 * httpMethod: padrão GET
 * uri: /php-mvc/
 * 
 */



// // ROTA HOME
$obRouter->get('/', [
    function(){
        return new Response(200, Home::getHome());
    }
]); 

