<?php

namespace App\Controllers;

use App\Views\MainView;
use App\Models\CadastroModel;
use App\Util\ConstantesGenericasUtil;

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
        $this->dadosForm();
        $this->view->render(array('titulo'=>'Cadastre-se'));
    }

    public function dadosForm()
    {
        if (isset($_POST['acao']))
        {
            if (!empty($_POST['nome']) && !empty($_POST['telefone']) && !empty($_POST['email'])) {
                $nome       = $_POST['nome'];
                $fone       = $_POST['telefone'];
                $email      = $_POST['email'];
                $funcao     = $_POST['funcao'];
                $foto       = $_FILES['foto'];
                $desc       = $_POST['desc'];
                $whats      = @$_POST['whatsapp'] == null ? 'possui' : 'não tem';
                $instagram  = !empty($_POST['instagram']) ? $_POST['instagram'] : 'não tem';
                $facebook   = !empty($_POST['facebook']) ? $_POST['facebook'] : 'não tem';
                $linkedin   = !empty($_POST['linkedin']) ? $_POST['linkedin'] : 'não tem';
                $telegram   = !empty($_POST['telegram']) ? $_POST['telegram'] : 'não tem';
                $data = date("Y-m-d H:i:s");

                if ($this->validaFoto($foto)) {
                    $nomeFoto = $this->uploadFile($foto);
                    if(CadastroModel::insert($nome,$fone,$email,$funcao,$nomeFoto,$desc,$whats,$instagram,$facebook,$linkedin,$telegram,$data)) {
                        $_SESSION['cadastro'] = ['cadastro'=>'sucesso','desc'=>ConstantesGenericasUtil::MSG_CADASTRO_SUCESSO];
                    }
                }else{
                    $_SESSION['cadastro'] = ['cadastro'=>'erro','desc'=>ConstantesGenericasUtil::MSG_CADASTRO_ERRO];
                }
            }else{
                $_SESSION['cadastro'] = ['cadastro'=>'vazio','desc'=>ConstantesGenericasUtil::MSG_CAMPOS_OBRIGATORIOS];
            }
        }
    }

    public function validaFoto($file)
    {
        if( $file['type'] == 'image/jpeg' ||
            $file['type'] == 'image/jpg' ||
            $file['type'] == 'image/png')
        {
            return true;
        }else{
            return false;
        }
    }

    public function uploadFile($file)
    {
        $formatoArquivo = explode('.',$file['name']);
        $nome = $formatoArquivo[0];
        $nomeArquivo = uniqid().'.'.$formatoArquivo[count($formatoArquivo) - 1];
        
        if(move_uploaded_file($file['tmp_name'],'app/Views/pages/uploads/'.$nomeArquivo)){
            return $nomeArquivo;
        }else{
            return false;
        }
    }
}