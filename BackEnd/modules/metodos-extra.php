<?php
    class metodosExtra{

        public function cifrarPassword($password){
            $passwordCifrado = null;
            $opciones = [
                'memory_cost' => 1 << 7, 
                'time_cost' => 4,
                'threads' => 2 
            ];
    
            $passwordCifrado = password_hash($password,PASSWORD_ARGON2I,$opciones);
            return $passwordCifrado;
        }

        public function validarDatos($name, $email, $pass, $img, $typeUser, $fecha){
            $respuesta = null;
            $errores = [];
            
           
            if(isName($name) === 0 ){
                $errores[] = "por favor ingresa un nombre valido";
            }
             $respuesta = json_encode("entre");

            // if ( $metodosExtra->isMail( $email ) === 0) {
            //     $errores[] = "ingresa un correo o un numero valido";
            // }
            // if($metodosExtra->diffDate($feecha) === 0){
            //     $errores[] = "no puede ser la misma fecha"; 
            // }
            // if($metodosExtra->diffDate($fecha) < 6570){
            //     $errores[] = "no puedes crear tu cuenta, debes ser mayor de edad"; 
            // }
            // if(count($errores) === 0){
            //     $validarUsuario = $consultas->userValidate($pass , $email, $name);
            //     $respuesta = null;
            //     if(!$validarUsuario){
            //         $respuesta = $inserciones->registrarUsuario($name, $email, $pass, $imagenPerfil, $typeUser, $fecha);
            //     }else{
            //         $respuesta["estatus"] = "error";
            //         $respuesta["mensaje"] = "el usuario ya existe";
            //     }
            //     echo json_encode($respuesta);           
            // }
            // else{
            //     echo json_encode($errores);
            // }
            return $respuesta;
            
        }
                 
       

        public function isMail( $mail ) {
            $regex = "/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$/";
            $mail = strtolower( $mail );
            return preg_match( $regex , $mail );
        }

        public function diffDate( $getDate ) {
            date_default_timezone_set('America/Monterrey');
            $currentDay = date("Y-m-d");
            $date1 =  new DateTime($currentDay);  
            $date2 = new DateTime($getDate);
            $diff = $date1->diff($date2);                         
            return $diff->days;
        }

        public function img($img){
            $url= null;
            
            if($img['name'] !== ""){
                $path = "../../FrondEnd/img/imgPerfiles";
                if (!is_dir($path)) {
                    mkdir($path);
                }
                $targetImg = $path.basename($img["name"]);
                if(move_uploaded_file($img["tmp_name"],$targetImg)){
                    $url = "img/img-perfiles/".basename($img["name"]);
                }else{
                    echo "no se pudo subir tu imagen";
                }
            }else{
                echo "los campos son necesarios";
            }

            return $url;
        }

        public function msg(){
            $msg = "mensaje";

            return $this->$msg;
        }
    }
?>