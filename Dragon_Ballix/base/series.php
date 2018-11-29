<?php
class Serie{
    
    public function llistaSeries(){
        try{
            require_once "conexion.php";
            

            $cadenaConexio="mysql:host=".$conexio["servidor"].";dbname=".$conexio['bd'];
            $dbCon = new PDO($cadenaConexio, $conexio["usuario"], $conexio["contrasenya"]); 
            $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            
            
            $consulta = $dbCon->prepare('SELECT idseries, nom, descripcio FROM series ORDER BY idseries DESC');
            

            $consulta->execute();
            $series=array();
  
            while($fila=$consulta->fetch()){
                $serie["idseries"]=$fila[0];
                $serie["nom"]=$fila[1];
                $serie["descripcio"]=$fila[2];
                array_push($series, $serie);
            }
            
        
            $dbCon=null;
   
            return $series;
            
        } catch (PDOException $e){
            echo("Error:".$e->getMessage());
            $dbCon=null;
        }
    }
    public function llistaRangSeries($ini, $fin){
        try{
            require "conexio.php";
            
          
            $cadenaConexio="mysql:host=".$conexio["servidor"].";dbname=".$conexio['bd'];
            $dbCon = new PDO($cadenaConexio, $conexio["usuario"], $conexio["contrasenya"]); 
            $dbCon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            
           
            $consulta = $dbCon->prepare("SELECT idseries, nom, descripcio FROM series ORDER BY idseries DESC :offset, :limit");
            
            
            $consulta->bindValue(':offset', intval($ini),PDO::PARAM_INT);
            $consulta->bindValue(':limit',  intval($fin),PDO::PARAM_INT);
            $consulta->execute();
            $series=array();
          
            while($fila=$consulta->fetch()){
                $serie["idseries"]=$fila[0];
                $serie["nom"]=$fila[1];
                $serie["descripcio"]=$fila[2];
                array_push($series, $serie);
            }
            

            $dbCon=null;

            return $series;
            
        } catch (PDOException $e){
            echo("Error:".$e->getMessage());
            $dbCon=null;
        }
    }
    
}
    

?>