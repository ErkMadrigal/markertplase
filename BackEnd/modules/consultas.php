<?php 
    class consultas{

        public function userValidate( $password, $email, $name ){
            $response  = null;

            try{
                $sql = "SELECT * FROM users WHERE  name= :name AND email= :email AND password= :password";
                $database = new database();
                
                $dbc = $database->getConnection();
                $stmt = $dbc->prepare($sql);
                $stmt->bindParam(":name",$name);
                $stmt->bindParam(":email",$email);
                $stmt->bindParam(":password",$password);
                $stmt->execute();
                $count = $stmt->rowCount();
                $response  = ( $count > 0  ) ? true : false;
            }catch(PDOEXCEPTION $e){
                $response =  '{"error":{"text":'. $e->getMessage() .'}}';
            }
            return $response;
        }  
    }

?>