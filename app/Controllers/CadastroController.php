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

    public function dadosForm()
    {
        if (isset($_POST['acao']))
        {
            if (!isset($_POST['nome']) && !isset($_POST['telefone']) && !isset($_POST['email']))
            {
                $nome = $_POST['nome'];
                $fone = $_POST['telefone'];
                $checkWA = $_POST['whatsapp'];
                $email = $_POST['email'];
                $funcao = $_POST['funcao'];
                $foto = $_POST['foto'];
                $desc = $_POST['desc'];
                $instagram = $_POST['instagram'];
                $facebook = $_POST['facebook'];
                $linkedin = $_POST['linkedin'];
                $telegram = $_POST['telegram'];
            }
            
        }
    }
}