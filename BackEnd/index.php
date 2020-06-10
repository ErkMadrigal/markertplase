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
        case "loginUsuario":
            $respuesta = $consultas->loginUsuario( $_POST["email"] , $_POST["password"] );
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
            
            $errores = [];
            
            if( $metodosExtra->isName($name) === 0 ){
                $errores[] = "por favor ingresa un nombre valido";
            }
            if( $metodosExtra->isMail( $email ) === 0) {
                $errores[] = "ingresa un correo o un numero valido";
            }
            if( $metodosExtra->diffDate($fecha) === 0){
                $errores[] = "no puede ser la misma fecha"; 
            }
            if( $metodosExtra->diffDate($fecha) < 6570){
                $errores[] = "no puedes crear tu cuenta, debes ser mayor de edad"; 
            }

            if(count($errores) === 0){
                $validarUsuario = $consultas->userValidate($email);
                if(!$validarUsuario){
                    $respuesta = $inserciones->registrarUsuario($name, $email, $pass, $img, $typeUser, $fecha);
                }else{
                    $respuesta["estatus"] = "error";
                    $respuesta["mensaje"] = "el usuario ya existe";
                }
                $respuesta;
            }else{
                $respuesta = $errores;
            }


        break;
    }
   


    echo json_encode($respuesta);
?>