<?php

    class User{
        public function validaUser($user, $pass){
            
            try{
                require_once("conexion.php");
               
                $cadenaConexio="mysql:host=".$conexio["servidor"].";dbname=".$conexio['bd'];
             
                echo $cadenaConexio;
   
                $db = new PDO($cadenaConexio, $conexio["usuario"], $conexio["contrasenya"]);
          
                $consulta = $db->prepare('SELECT rol FROM Usuaris WHERE NOM_usuari = ? AND Contrasenya = ?');
                $consulta->execute(array($user, $pass));
             
                $role=false;
  
                while($fila=$consulta->fetch()){
                    echo 'while';
                $role=$fila[0];
                    
                    
                }
                
                $db=null;
                
                return $role;
            
            } catch (Exception $e) {
                
                echo("Error:".$e-getMessage());
                
                $db=null;
                
            }
        
        
        
        
        
        }
    
    
    
    
    }





?>