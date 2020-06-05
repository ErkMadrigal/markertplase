<?php
    $respuesta = null;
    include "modules/database.php";
    include "modules/inserciones.php";
    include "modules/consultas.php";
    include "modules/metodos-extra.php";

    $inserciones = new inserciones();
    $metodosExtra = new metodosExtra();
    $consultas = new consultas();


    $opcion = $_POST["opcion"];

    switch( $opcion ){
        case "new":
            $respuesta = "hola mundo";
        break;

        case "registrarUsuario":
            $name = ( $_POST['name'] !== "" ) ? $_POST['name'] : null ;
            $email = ( $_POST['email'] !== "" ) ? $_POST['email'] : null ;
            $fecha = $_POST['anio']."-".( ( $_POST['mes'] < 10 ) ? "0".$_POST['mes'] : $_POST['mes'] )."-".( ( $_POST['dia'] < 10 ) ? "0".$_POST['dia'] : $_POST['dia'] );
            $terms = ( $_POST['terms'] !== "") ? $_POST['terms'] : null;
            $typeUser = 2;
            
            $password = ( $_POST['password'] !== "") ? $_POST['password'] : null;
            $pass = $metodosExtra->cifrarPassword( $password );

            $imagenPerfil = $_FILES['imagenPerfil'];            
            $img = $metodosExtra->img($imagenPerfil);

            $respuesta = $metodosExtra->validarDatos($name, $email, $pass, $img, $typeUser, $fecha);

            // $respuesta = $inserciones->registrarUsuario($name, $email, $pass, 'img/default.jpg', $typeUser, $fecha);
            
        break;
    }
   


    echo json_encode($respuesta);
?>