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
    }

?>