<?php

    class User{
        public function validaUser($user, $pass){
            echo '2';
            try{
                require_once("conexion.php");
                echo '3';
                $cadenaConexio="mysql:host=".$conexio["servidor"].";dbname=".$conexio['bd'];
                echo '4';
                echo $cadenaConexio;
                echo '5';
                $db = new PDO($cadenaConexio, $conexio["usuario"], $conexio["contrasenya"]);
                echo '6';
                $consulta = $db->prepare('SELECT rol FROM Usuaris WHERE NOM_usuari = ? AND Contrasenya = ?');
                $consulta->execute(array($user, $pass));
                echo '7';
                $role=false;
                echo '7';
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