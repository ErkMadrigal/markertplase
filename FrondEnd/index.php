<?php 
    include 'modules/root.php'; 
    $title  = "Bienvenido";  
    $header = false;
    $footer = false;
    include 'modules/components/header.php';
    

    $url=(isset($_GET['dir']))?$_GET['dir']:'login';

    switch ($url) {
        case 'login':

            include 'modules/pages/login.php';
            $scripts = [ "js/login.js" ];

        break;
        case 'register':

            include 'modules/pages/register.php';
            
            $scripts = [ "js/registar-usuario.js" ];

        break;
        default:
        include 'modules/pages/login.php';
        break;
    }

    include 'modules/components/footer.php'; 
?>