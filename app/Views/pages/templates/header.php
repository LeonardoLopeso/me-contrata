<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $arr['titulo']; ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_FULL; ?>css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH_FULL ?>css/style.css">
</head>
<body>
    <header class="">
        <div class="logo">
            <h2>Me contrata</h2>
        </div>
        <div class="menu-desktop">
                <?php
                    foreach($this->menuItems as $value)
                    {
                        if($value != 'Cadastro')
                            echo '<a href="'.INCLUDE_PATH.strtolower($value).'">'.$value.'</a>';
                        else
                            echo '<i style="color:#444;" class="fa fa-user"></i> <a href="'.INCLUDE_PATH.strtolower($value).'">'.$value.'</a>';
                    }
                ?>
                
        </div>
    </header>
    <div class="titulo-destaque">
        <?php
            $url = isset($_GET['url']) ? $_GET['url'] : '';
            switch($url) {
                case $url == 'home':
                    echo '<h2>Me contrata, pessoas que buscam oportunidades de trabalho</h2>';
                    break;
                case $url == 'cadastro':
                    echo '<h2>Faça seu cadastro para que empresas possam te ver!</h2>';
                    break;
                case $url == 'contato':
                    echo '<h2>Área de Contato</h2>';
                    break;
                case $url == 'sobre':
                    echo '<h2>Página sobre</h2>';
                    break;
                case $url == '':
                    echo '<h2>Me contrata, pessoas que buscam oportunidades de trabalho</h2>';
                    break;
            }
        ?>
    </div>
    