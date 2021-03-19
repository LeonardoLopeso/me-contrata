<?php

namespace App\Controllers;

use App\Views\MainView;

/**
 * 
 */
class CadastroController
{

    public function __construct()
    {
        $this->view = new MainView('cadastro');
    }

    public function executar()
    {
        $this->view->render(array('titulo'=>'Cadastre-se'));
    }
}