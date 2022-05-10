<?php  include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="palavras chaves do meu site">
        <meta name="description" content="Descrição do meu website">

        <link href="<?php  echo INCLUDE_PATH; ?>/fontawesome/css/all.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap,300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="<?php  echo INCLUDE_PATH; ?>/css/style.css">
        <title>Meu WebSite</title>
    </head>
    <body>
        <?php
            $url = isset($_GET['url']) ? $_GET['url'] : 'home';

            switch($url){
                case 'sobre':
                    echo '<target target="sobre" />';
                    break;

                case 'servicos':
                    echo '<target target="servicos" />';
                    break;
            }
        ?>

        <header>
            <div class="center">
                <div class="logo left">Rico.com</div>
                <nav class="desktop right">
                    <ul>
                        <li><a href="<?php  echo INCLUDE_PATH; ?>">Home</a></li>
                        <li><a href="<?php  echo INCLUDE_PATH; ?>/sobre">Sobre</a></li>
                        <li><a href="<?php  echo INCLUDE_PATH; ?>/servicos">Serviços</a></li>
                        <li><a href="<?php  echo INCLUDE_PATH; ?>/contato">Contato</a></li>
                    </ul>
                </nav>

                <nav class="mobile right">
                    <div class="botao-menu-mobile">
                        <i class="fa-solid fa-bars"></i>
                    </div>                    
                    <ul>
                        <li><a href="<?php  echo INCLUDE_PATH; ?>">Home</a></li>
                        <li><a href="<?php  echo INCLUDE_PATH; ?>/sobre">Sobre</a></li>
                        <li><a href="<?php  echo INCLUDE_PATH; ?>/servicos">Serviços</a></li>
                        <li><a href="<?php  echo INCLUDE_PATH; ?>/contato">Contato</a></li>                    
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
        </header>
		
        <?php
            $url = isset($_GET['url']) ? $_GET['url'] : 'home';
            if(file_exists('pages/'.$url.'.php')) {
                include('pages/'.$url.'.php');
            }else {
                if ($url != 'sobre' && $url != 'servicos') {
                    $pagina404 = true;
                    include('pages/404.php');
                }else{
                    include('pages/home.php');
                }
            }
        ?>

        <footer <?php if(isset($pagina404) && $pagina404 == true) { echo 'class="fixed"'; } ?>>
        <!-- <footer <?php if(isset($pagina404) && $pagina404 == true) { echo 'class="fixed"'; } ?>> -->
            <div class="center">
                <p>Todos os Direitos Resevados</p>
            </div>
        </footer>
    </body>
    <script src="<?php  echo INCLUDE_PATH; ?>/js/jquery.min.js"></script>
    <script src="<?php  echo INCLUDE_PATH; ?>/js/script.js"></script>

    <?php  if ( $url == 'contato' ) { ?>
        <script src="<?php  echo INCLUDE_PATH; ?>/js/slide.js"></script>
    <?php } ?>
    
    <?php  if ( $url == 'contato' ) { ?>
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
        <script src="<?php  echo INCLUDE_PATH; ?>/js/map.js"></script>
    <?php } ?>
</html>