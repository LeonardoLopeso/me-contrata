<?php

namespace App\Models;

use PDO;

/**
 * 
 */
class CRUDModel
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

    public static function select()
    {
        $sql = MySqlModel::conectar()->prepare("SELECT * FROM `cadastro` ORDER BY id DESC");
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}