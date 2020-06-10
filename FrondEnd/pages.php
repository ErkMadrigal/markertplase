<?php 
session_start(); 
if(isset($_SESSION["idUser"])):

    include 'modules/root.php'; 
    $title  = "Bienvenido";  
    $header = true;
    $footer = true;
    include 'modules/components/header.php';

    include 'modules/components/navar.php';

    
    $url=(isset($_GET['dir']))?$_GET['dir']:'index';

    switch ($url) {
        
        case 'index':
            include 'modules/pages/index.php';
            $scripts = [
                "plugins/bootstrap/js/bootstrap.bundle.min.js",
                "js/adminlte.min.js",
                "js/demo.js"
            ];
        break;

        case 'marketplace':
            include 'modules/pages/marketplace.php';
        break;
        
        case 'msg':
            include 'modules/pages/msg.php';
        break;
        
        case 'product':
                
            include 'modules/pages/product.php';
            
            $scripts = [
                "plugins/bootstrap/js/bootstrap.bundle.min.js",
                "js/adminlte.min.js",
                "js/demo.js",
                "https://unpkg.com/leaflet@1.6.0/dist/leaflet.js",
                "js/map.js"
            ];
            
        break;

        case 'perfile':
            include 'modules/pages/perfile.php';
            $scripts = [
                "plugins/bootstrap/js/bootstrap.bundle.min.js",
                "js/adminlte.min.js",
                "js/demo.js"
            ];
        break;
        
        case 'error404':
            include 'modules/pages/error404.php';
        break;
        
        default:
            include 'modules/pages/index.php';
        break;
    }

    include 'modules/components/footer.php'; 

else:
    $header = true;
    $footer = true;

    $titulo  = "Uy, algo perdido!"; 

    include 'modules/components/header.php';

        include "modules/pages/error404.php";

    include 'modules/components/footer.php';

endif;
?>