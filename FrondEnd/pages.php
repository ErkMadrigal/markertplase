<?php 
    include 'modules/root.php'; 
    $title  = "Bienvenido ";  
    $menu=true;
    include 'modules/components/header.php';
    
    $url=(isset($_GET['dir']))?$_GET['dir']:'index';

    switch ($url) {
        case 'index':
            include 'modulos/pages/index.php';
            break;
        case 'marketplace':
            include 'modulos/pages/loginExam.php';
            break;
        case 'msg':
            include 'modulos/pages/login.php';
            break;
          default:
            include 'modulos/pages/index.php';
            break;
    }

    include 'modules/components/footer.php'; 
?>