
<?php

session_start();

$usuaris=["admin", "user"];

$user=$_REQUEST["inputUser"];
$pass=$_REQUEST["pass"];

if ($pass=="1234" && in_array($user, $usuaris)) {
    
    $_SESSION['username']=$user;
    
    if ($user=="admin")

        $_SESSION['role'] = "admin";
    
    else if ($user=="user")
        
        $_SESSION['role'] = "user";
    
    header("Location: index.php");
    
    exit();

}

else{
    
?>    
<!DOCTYPE html>
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
