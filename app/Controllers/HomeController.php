<?php

namespace App\Controllers;

use App\Views\MainView;
use App\Models\CRUDModel;
use App\Util\ConstantesGenericasUtil;

/**
 * 
 */
class HomeController
{
    
    public function __construct()
    {
        $this->view = new MainView('home');
    }

    public function executar()
    {
        $consulta = CRUDModel::select();
        $this->view->render(array('titulo'=>'Título da page','consulta'=>$consulta));
    }
}
