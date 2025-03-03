<?php

namespace App\Http;

// CLASS RESPONSÁVEL POR GERENCIAR AS REQUISIÇÕES REALIZADAS PELO USUÁRIO
class Request {

    /**
     * Método http da requisição (dele, get, patch, post e put)
     * @var string
     */
    private $httpMethod;

    /**
     * URI da página (básicamente é nossa rota, exemplo: http://localhost/home)
     * @var string
     */
    private $uri;

    /**
     * Paramentros que são enviados na URL através do método GET da página ($_GET)
     * @var array
     */
    private $queryParams = [];

    /**
     * Variaveis recebidas no POST da página ($_POST)
     * @var array
     */
    private $postVars = [];

    /**
     * Cabeçalho da requisição 
     * @var array
     */
    private $headers = [];

    /**
     * Construtor da classe
     */
    public function __construct() {
        $this->queryParams  = $_GET ?? [];
        $this->postVars     = $_POST ?? [];
        $this->headers      = getallheaders(); // FUNÇÃO DO PHP PARA CAPTURAR TODOS OS HEADERS RECEBIDOS
        $this->httpMethod   = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri          = $_SERVER['REQUEST_URI'] ?? '';
    }

    /**
     * Método responsável por retornar o método HTTP
     * @return string
     */
    public function getHttpMethod() {
        return $this->httpMethod;
    }

    /**
     * Método responsável por retornar a URI
     * @return string
     */
    public function getUri() {
        return $this->uri;
    }

    /**
     * Método responsável por retornar os headers da requisição
     * @return array
     */
    public function getHeaders() {
        return $this->headers;
    }

    /**
     * Método responsável por retornar os parametros da URL da requisição
     * @return array 
     */
    public function getQueryParams() {
        return $this->queryParams;
    }

    /**
     * Método responsável por retornar as váriaveis do tipo $_POST da requisição
     * @return array
     */
    public function getPostVars() {
        return $this->postVars;
    }

}