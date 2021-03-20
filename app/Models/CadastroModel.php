<?php

namespace App\Models;

/**
 * 
 */
class CadastroModel
{
    public static function insert($nome,$fone,$email,$func,$foto,$desc,$whats,$insta,$face,$linkedin,$telegram,$data)
    {
        $sql = MySqlModel::conectar()->prepare("INSERT INTO `cadastro` VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?)");
        if ($sql->execute(array($nome,$fone,$email,$func,$foto,$desc,$whats,$insta,$face,$linkedin,$telegram,$data))) {
            return true;
        }else{
            return false;
        }
    }
}