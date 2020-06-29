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

        public function img($img){
            $url= null;
            
            if($img['name'] !== ""){
                $path = "../FrondEnd/img/img-perfiles/";
                if (!is_dir($path)) {
                   mkdir($path, 0777, true);
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
        public function isEmpty( $string ) : bool {
            return isset($string);
        }

        public function isName( $string ) : int{
            $regex = "/^[a-z-A-Z\D]+$/";
            return preg_match( $regex , $string );
        }

        public function isMail( $mail ) : int{
            $regex = "/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$/";
            $mail = strtolower( $mail );
            return preg_match( $regex , $mail );
        }

        public function diffDate( $getDate ) : int{
            date_default_timezone_set('America/Monterrey');
            $currentDay = date("Y-m-d");
            $date1 =  new DateTime($currentDay);  
            $date2 = new DateTime($getDate);
            $diff = $date1->diff($date2);                         
            return $diff->days;
        }

        Public function mes($fecha){
            $mes = null;

            switch( $fecha ){
                case 1:
                    $mes = "Enero";
                break;
                case 2:
                    $mes = "Febrero";
                break;
                case 3:
                    $mes = "Marzo";
                break;
                case 4:
                    $mes = "Arbil";
                break;
                case 5:
                    $mes = "Mayo";
                break;
                case 6:
                    $mes = "Junio";
                break;
                case 7:
                    $mes = "Julio";
                break;
                case 8:
                    $mes = "Agosto";
                break;
                case 9:
                    $mes = "Septiembre";
                break;
                case 10:
                    $mes = "Octubre";
                break;
                case 11:
                    $mes = "Noviembre";
                break;
                case 12:
                    $mes = "Diciembre";
                break;
            }

            return $mes;
        }

    }
?>