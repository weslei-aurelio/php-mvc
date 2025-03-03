<?php
// Representa a empresa do nosso projeto (Weslei Aureli LTDA)

namespace App\Model\Entity;

class Organization {
    /**
     * Neste primeiro momento não iremos realizar a conexão com o banco de dados.
     * Iremos representar de uma forma que exemplifique o retorno do banco de dados.
     *
     */

    /**
    * ID da organização
    * @var integer
    */
    public $id = 1;
    
    /**
     * Nome da organização
     * @var string
     */
    public $name = 'Weslei Aurelio LTDA';

    /**
     * Site da organização
     * @var string
     */
    public $site = 'https://youtube.com';

    /**
     * Texto sobre a origanização
     * @var string
     */
    public $description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a ipsum sagittis, fringilla ipsum in, suscipit leo. Sed vitae tristique ipsum. Morbi fermentum bibendum metus at tristique. Maecenas vehicula, mi et finibus varius, leo arcu dapibus massa, non blandit dui urna vitae dolor. Duis in faucibus dui. Praesent ac tortor sit amet velit dapibus tincidunt ut id massa. Suspendisse potenti.';

}