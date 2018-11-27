<?php

    class Usuario{
    
        public function validarUsuari($user, $pass){
        
            try{
                require_once("conexion.php");
                
                $cadenaC="mysql:host=".$connexio["servidor].";dbname=".$connexio['bd'];
                
                echo $cadenaC;
                
                $db = new PDO($cadenaConnexio, $connexio["usuari"], $connexio["contrassenya"]);
                
                $consulta = $db->prepare("SELECT rol FROM Usuaris WHERE NOM_usuari = ? AND Contraseña = ?");
                $consulta->execute(array($usuari, $pass));
            
                $role=false;
                while($fila)
            
            }
        
        
        
        
        
        }
    
    
    
    
    }





?>