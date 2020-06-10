<?php 
    class consultas{

        public function userValidate( $email){
            $response  = null;
            try{
                $sql = "SELECT * FROM users WHERE email = :email";
                $database = new database();
                
                $dbc = $database->getConnection();
                $stmt = $dbc->prepare($sql);
                $stmt->bindParam(":email",$email);
                $stmt->execute();
                $count = $stmt->rowCount();
                $response  = ( $count > 0  ) ? true : false;
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }
        public function loginUsuario( $email , $password ){
            $respuesta = null;

            try{
                $sql = "SELECT id_user,password,id_type_user FROM users WHERE  email = :email";
                $database = new database();
                $db = $database->getConnection();
                $stmt = $db->prepare($sql);
                $stmt->bindParam(":email",$email);
                $stmt->execute();
                $informacionUsuario = $stmt->fetch(PDO::FETCH_ASSOC);
                if($informacionUsuario){
                    if(password_verify($password, $informacionUsuario["password"])){
                        $respuesta["estatus"] = "ok";
                        $respuesta["mensaje"] = [
                            "id_type_user" =>  $informacionUsuario["id_type_user"],
                            "id_user" =>  $informacionUsuario["id_user"]
                        ];
                    }else{
                        $respuesta["estatus"] = "error";
                        $respuesta["mensaje"] = "tu cuenta si existe, pero tienes un error en la contraseña";
                    }
                }else{
                    $respuesta["estatus"] = "error";
                    $respuesta["mensaje"] = "tu cuenta no existe";
                }
            }catch(PDOException $e){
                $respuesta["estatus"] = "error";
                $respuesta["mensaje"] = $e->getMessage();
            }
            return $respuesta;

        }  
    }

?>