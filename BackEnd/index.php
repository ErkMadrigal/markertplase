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

        case "loginUsuario":
            $respuesta = $consultas->loginUsuario( $_POST["email"] , $_POST["password"] );
        break;

        case "getDataUsr":
            $respuesta = $consultas->getUser($_POST["idUsr"]);
        break;

        case "getUsrs":
            $respuesta = $consultas->getUsers($_POST["idUsr"]);
        break;
        
        case "getUsers":
            $respuesta = $consultas->getUser($_POST["idUsrs"]);
        break;

        case "post":

            $titulo = ( $_POST['titulo'] !== "" ) ? $_POST['titulo'] : null ;
            $cantidad = ( $_POST['cantidad'] !== "" ) ? $_POST['cantidad'] : null ;
            $costo = ( $_POST['costo'] !== "") ? $_POST['costo'] : null;
            $descripcion = ( $_POST['descripcion'] !== "") ? $_POST['descripcion'] : null;
            $image = ( $_POST['image'] !== "") ? $_POST['image'] : null;
            $categoria = ( $_POST['categoria'] !== "") ? $_POST['categoria'] : null;
            $idUsr = ( $_POST['idUsr'] !== "") ? $_POST['idUsr'] : null;

            $respuesta = $inserciones->registrarPost($titulo, $cantidad, $costo, $descripcion, $image, $categoria, $idUsr);
        break;

        default:
            $target_dir = "../FrondEnd/img/img-post/"; // Upload directory

            $request = 1;
            if(isset($_POST['request'])){
                $request = $_POST['request'];
            }
            
            // Upload file
            if($request == 1){
                $target_file = $target_dir . basename($_FILES["file"]["name"]);
            
                $msg = "";
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$_FILES['file']['name'])) {
                    $msg = "Successfully uploaded";
                }else{
                    $msg = "Error while uploading";
                }
                echo $msg;
            }
            $request = $_POST['request'];
            
            // Remove file
            if($request == 2){
                $filename = $target_dir.$_POST['name']; 
                unlink($filename); exit;
            }
        break;
    }
   


    echo json_encode($respuesta);
?>