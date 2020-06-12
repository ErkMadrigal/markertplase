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

            $foot=null;

        break;
        case 'register':

            include 'modules/pages/register.php';
            
            $scripts = [ "js/registar-usuario.js" ];
            $foot=null;

        break;
        case 'error400':
            include 'modules/error/error400.php';
            $foot="fixed-bottom";

        break;
        case 'error401':
            include 'modules/error/error401.php';
            $foot="fixed-bottom";

        break;
        case 'error403':
            include 'modules/error/error403.php';
            $foot="fixed-bottom";

        break;
        case 'error404':
            include 'modules/error/error404.php';
            $foot="fixed-bottom";

        break;
        case 'error500':
            include 'modules/error/error500.php';
            $foot="fixed-bottom";

        break;
        default:
            include 'modules/pages/login.php';
            $foot=null;
        break;
    }

    include 'modules/components/footer.php'; 
?>