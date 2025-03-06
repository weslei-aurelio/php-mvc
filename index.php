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

// ROTA HOME
$obRouter->get('/', [
    function(){
        return new Response(200, Home::getHome());
    }
]);

$obRouter->run();

