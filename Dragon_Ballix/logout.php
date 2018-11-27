<?php

session_start();

if(!isset($_SESSION["username"])) header("Location: index.php");


    $_SESSION = array();

if(isset($_COOKIE["User"])){
    
    
    setcookie("User", null, time()-3600);
    
}

if(isset($_COOKIE["Role"])){
    
    
    setcookie("Role", null, time()-3600);
    
}

if(isset($_COOKIE[session_name()])){
    
    
    setcookie(session_name(), '', time() - 42000, '/');
    
}

session_destroy();

header("Location: index.php");

exit();

?>
