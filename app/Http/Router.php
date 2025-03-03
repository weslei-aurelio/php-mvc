<?php

namespace App\Http;

class Router {

    /**
     * URL completa do projeto (raiz)
     * @var string
     */
    private $url = '';

    /**
     * Prefixo de todas as rotas
     * @var string
     */
    private $prefix = '';

    /**
     * Indice de rotas 
     * @var array
     */
    private $routes = [];

    /**
     * Instância de request
     * @var Request
     */
    private $request;

    /**
     * Método responsável por iniciar a classe
     * @param string $url
     */
    public function __construct($url) {
        $this->request  = new Request();
        $this->url      = $url;
        $this->setPrefix();

    }

    /**
     * Método responsável por definir o prefixo das rotas.
     * 
     */
    private function setPrefix() {
        // INFORMAÇÕES DA URL ATUAL
        $parseUrl = parse_url($this->url);
       
        // DEFINE O PREFIXO - Caminho base usado nas rotas da aplicação
        $this->prefix = $parseUrl['path'] ?? '';
    }

    /**
     * Método genérico responsável por definir a rota  na classe.
     * @param string $method
     * @param string $route
     * @param array $params
     */

    private function addRoute($method, $route, $params = []) {
        
        // echo "<pre>";
        //     print_r($method);
        // echo "</pre>";
       
        // echo "<pre>";
        //     print_r($route);
        // echo "</pre>";

        // echo "<pre>";
        //     print_r($params);
        // echo "</pre>";
    }

    /**
     * $route: define qual é a rota que vai ser executada quando o método get for solicitado
     * $params: dados de execução
     * 
     * Método responsável por definir uma rota de $_GET
     * @param string $route
     * @param array $params
     * 
     */
    public function get($route, $params = []) {
        return $this->addRoute('GET', $route, $params);
    }

}