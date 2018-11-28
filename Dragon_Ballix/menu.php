<?php

session_start();

$user="Anonimo";
$role="";

if (isset($_SESSION['username'])) {
    
    $user=$SESSION['username'];
    
    if (isset($_SESSION['role']) && $_SESSION['role']=="admin") $role="(admin)";
    
    else $role="";

    
} else if (isset($_COOKIE['DGUser'])){
    
    $_SESSION['username'] = $_COOKIE['DGUser'];
    
    if (isset($_COOKIE['DGUser'])) $_SESSION['role'] = $_COOKIE['DGUser'];
    
    if ($_SESSION['role']=="admin") $role="(admin)"; else $role="";
    
    $user=$_SESSION['username'];
  
    
}



$nomuser=$user#.$role;

?>

<nav class="main-nav">
                
            <ul class="main-nav">
                
                <li class="li-a"><a class="ala" href="index.php">Página principal</a></li>
                
                
                <?php
    
                    if ($role=="(admin)" ) {
                        
                        ?>
 
                <li class="li-a"><a class="ala" href="seriespelis.php">Series y películas</a></li>
                
                <li class="li-a"><a class="ala" href="enlaces.php">Personajes</a></li>
                
                <li class="li-a"><a class="ala"  href="juegos.php">Juegos</a></li>
                
                <li class="li-a"><a class="ala"  href="contactos.php">Accede al foro</a></li>
                
             </ul> 
    
            <?php } ?>
            
            </nav>

            <nav class="regist">

              <ul class="regist">
                  
            <?php if($user=="Anonimo"){ ?>
              
              <li class="li-a"><a class="ala" href="loginForm.php">Inicia sesión</a></li>
                  
                  <?php } else { ?>
                  
                  <li class="li-a"><a class="ala" href="logout.php">Cierra La sesión</a></li>
                  
                  <?php } ?>

              <li class="li-a"><a class="ala" href="registro.php">Registrate</a></li>
                  
                  <?php
    
                    if ($role=="(admin)") {
                        
                        ?>
            
            <li class="li-a"><a class="ala" href="administracion.php">Administracion</a></li>
                  
              </ul>
                
                <?php } ?>
                
                <?php if($user!="Anonimo"){ ?>
                
                <li class="li-a"><a class="ala" href="#"> <?php echo($nomuser) ?></a> </li>
                
                
             <?php   } ?>
                

            </nav>