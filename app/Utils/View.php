<?php

// CLASSE RESPONSÁVEL POR GERENCIAR AS VIEWS

namespace App\Utils;

class View {

    // MÉTODOS RESPONSÁVEIS POR RENDERIZAR AS VIEWS

    /**
     * Método responsável por retornar o conteúdo de uma view
     * @param string $view
     * @return string
     */
    private static function getContentView($view) {
        // O MÉTODO IRÁ VERIFICAR SE A VIEW EXISTE. CASO NÃO EXISTA IRÁ RETORNAR VAZIO
        $file = __DIR__.'/../../resources/view/'.$view.'.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
     * Método responsável por retornar o contêudo renderizado de uma view
     * @param string $view
     * @param array $vars (strings/numeric)
     * @return string
     */
    public static function render($view, $vars = []) {

        /**
         * Execucao getPage()
         * pages/page
         * 
         * title: Menu Home
         * header: string estrutura html do arquivo header.html ja renderizado
         * content: string strutura html do arquivo home.html  ja renderizado
         * 
         */

        // CONTEUDO DA VIEW
        $contentView =  self::getContentView($view);

        // DESCOBRINDO AS CHAVES DO ARRAY DE VARIAVEIS (TRATAMENTO DAS CHAVES)
        $keys = array_keys($vars);

        /**
         * {{title}} - weslei
         * {{header}} - string estrutura html do arquivo header.html ja renderizado
         * {{content}} - string strutura html do arquivo home.html  ja renderizado
         * 
         * 
         */

        $keys = array_map(
            function($item){
                return '{{'.$item.'}}';            
            }
        ,$keys);

       /**
        * Pegar as chaves: {{title}}, {{header}}, {{content}}
        */

        // FIM DO TRATAMENTO
   
        //RETORNA O CONTEUDO RENDERIZADO 
        return str_replace($keys, array_values($vars), $contentView);

        /**
         * str_replace:
         * $keys - string de pesquisa
         * array_values($vars) - pega somente os valores do array (Weslei, Home Menu) - string de substituição 
         * $contentView - string onde será realizada a busca para substituir
         * Resumo: Onde estiver as chaves ($keys: {{nome}}) substitua pelos valores do array $vars (Weslei). A pesquisa deve ocorrer na string: $contentView 
         * 
         * 
         */

        

    }

}