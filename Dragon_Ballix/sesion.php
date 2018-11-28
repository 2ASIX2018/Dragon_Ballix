
<?php

session_start();

require_once("base/users.php");

$userobject=new User();

$username=$_REQUEST["inputUser"];
$pass=$_REQUEST["pass"];
//$remember=$_REQUEST["rememberMe"];


$role=$userobject->validaUser($username, $pass);
echo $role;
if ($role){
    
    $_SESSION['username']=$username;
    
    $_SESSION['role']=$role;
    
    
    if ($remember=="remember"){
        
        
        setcookie('DGUser', $_SESSION['username'], time() + 365 * 24 * 60 * 60);
        setcookie('DGRole', $_SESSION['role'], time() + 365 * 24 * 60 * 60);
        
    }
    
    
    header("Location: index.php");
    
    exit();
    
    
} else{
    
?>    

<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>

    </head>
  <body>
      
      <div class="contenido" style="margin-top:10em;">
      
      <div role="alert">
          
          Error: El usuario no se encuentra registrado.
          </div>
      
      <a href="loginForm.php">Vuelve atrás</a>
      
      </div>
  </body>
</html>

<?php
    
}

?>
