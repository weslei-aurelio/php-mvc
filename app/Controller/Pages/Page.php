<?php
// CONTROLADOR DE PÁGINA
namespace App\Controller\Pages;

use \App\Utils\View;

class Page {

    /**
     * Método responsável por renderizar o topo da página
     * @return string
     */
    private static function getHeader() {
        return View::render('pages/header');
    }

     /**
     * Método responsável por renderizar o rodapé da página
     * @return string
     */
    private static function getFooter() {
        return View::render('pages/footer');
    }

    public static function getPage($title, $content) {

        /**
         * $title definido na chamado da funcao dentro do getHome.
         * $content: string com toda a estrutura da pagina home.
         */

        // antes de dar continuidade ira executar o getHeader();

        return View::render('pages/page', [ 
            'title'   => $title,
            'header'  => self::getHeader(),
            'content' => $content,
            'footer'  => self::getFooter()
        ]); 
    }
}