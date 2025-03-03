<?php

// CLASSE RESPONSÁVEL POR GERENCIAR AS REQUISIÇÕES QUE CHEGAM NA PÁGINA HOME DO SITE

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

// A Classe filha (subclasse) herda as propriedades e métodos da classe Pai (superclasse) 
class Home extends Page {

    /**
     * Método responsável por retornar o contêudo (view) da home
     * @return string
     */
    public static function getHome() {

        // CRIA UMA NOVA INSTÂNCIA DE ORGANIZAÇÃO
        $obOrganization = new Organization;

        // VIEW DA HOME
        $content = View::render('pages/home', [
            'name'        => $obOrganization->name,
            'site'        => $obOrganization->site,
            'description' => $obOrganization->description
        ]);

    
        // RETORNAR O TITULO E A VIEW (CONTENT) DA PAGINA
        return parent::getPage('Home projeto MVC PHP', $content);
    }
}