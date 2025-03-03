<?php

namespace App\Http;

class Response {

    /**
     * Código do status HTTP
     * @var integer
     */
    private $httpCode = 200;

    /**
     * Cabeçalho do response
     * @var array
     */
    private $headers = [];

    /**
     * Tipo de conteudo que está sendo retonardo
     * @var string
     */
    private $contentType = 'text/html';

    /**
     * Conteudo do response
     * @var mixed
     */
    private $content;

    /**
     * Método responsável por iniciar a classe e definir os valors
     * @param integer $httpCode
     * @param mixed   $content
     * @param string  $contentType
     */
    public function __construct($httpCode, $content, $contentType = 'text/html') {
        $this->httpCode     = $httpCode;
        $this->content      = $content;
        $this->setContentType($contentType);
    }

    // TODA VEZ QUE O CONTEUDO FOR ALTERADO É NECESSÁRIO ALTERAR O TIPO DO CONTEUDO.

    /**
     * Método responsável por alterar o tipo de conteudo do response
     * @param string $contentType
     */
    public function setContentType($contentType) {
        $this->contentType = $contentType;
        $this->addHeader('Content-Type', $contentType);
    }

    /**
     * Método responsável por adicionar um registro no cabeçalho de response
     * @param string $key
     * @param string $value
     */
    public function addHeader($key, $value) {
        $this->headers[$key] = $value;
    }

    /**
     * Método responsável por enviar os headers para o navegador
     */
    private function sendHeaders() {
        // DEFINIR O STATUS
        http_response_code($this->httpCode);

        // ENVIAR OS HEADERS DA PAGINA
        foreach ($this->headers as $key => $value) {
            header($key.':'. $value);
        }
    }

    /**
     * Método responsável por enviar a resposta para o usuário
     */
    public function sendResponse() {
        // ENVIA OS HEADERS
        $this->sendHeaders();
        
        // VALIDAND O TIPO DE CONTEUDO
        switch ($this->contentType) {
            case 'text/html':
                echo $this->content;
                break;
        }
        
    }
}