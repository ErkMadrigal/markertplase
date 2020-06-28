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

        public function registrarPost($title, $cantidad, $costo, $description, $images, $idCategoria, $idUser){

            $respuesta = null;

            try{
                $sql = "INSERT INTO posts( title, cantidad, costo, description, images, id_categoria, id_user) VALUES (:title, :cantidad, :costo, :description, :images, :id_categoria, :id_user)";
                $database = new database();
                $db = $database->getConnection();
                $stmt = $db->prepare($sql);
                $stmt->bindParam(":title", $title);
                $stmt->bindParam(":cantidad", $cantidad);
                $stmt->bindParam(":costo", $costo);
                $stmt->bindParam(":description", $description);
                $stmt->bindParam(":images", $images);
                $stmt->bindParam(":id_categoria", $idCategoria);
                $stmt->bindParam(":id_user", $idUser);
                $stmt->execute();
                $respuesta["estatus"] = "ok";
                $respuesta["mensaje"] = "Tu producto se ha registrado con el titulo de ${title}";
            }catch(PDOException $e){
                $respuesta["estatus"] = "error";
                $respuesta["mensaje"] = $e->getMessage();
            }

            return $respuesta;
        }
    }
?>