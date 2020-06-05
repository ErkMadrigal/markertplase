<?php
    class inserciones{

        public function registrarUsuario($name, $email, $password, $img, $typeUser, $fecha_nacimiento){

            $respuesta = null;

            try{
                $sql = "INSERT INTO users(name, email, password, img, id_type_user, fecha_nacimiento) VALUES (:name, :email, :password, :img, :id_type_user, :fecha_nacimiento)";
                $database = new database();
                $db = $database->getConnection();
                $stmt = $db->prepare($sql);
                $stmt->bindParam(":name", $name);
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":password", $password);
                $stmt->bindParam(":img", $img);
                $stmt->bindParam(":id_type_user", $typeUser);
                $stmt->bindParam(":fecha_nacimiento", $fecha_nacimiento);
                $stmt->execute();
                $respuesta["estatus"] = "ok";
                $respuesta["mensaje"] = "Tu cuenta se ha registrado con el usuario ${name}";
            }catch(PDOException $e){
                $respuesta["estatus"] = "error";
                $respuesta["mensaje"] = $e->getMessage();
            }

            return $respuesta;
        }
    }
?>