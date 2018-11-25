<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>

    <link rel="stylesheet" href="css/login.css" type="text/css" media="all">
  </head>
  <body>
    <div class="contenido">

      <div class="login">
        <div class="fondo">
          <h3>Inicio de Sesión</h3>
          
          <form id="Login" action="sesion.php" method="post">
          <h2>Usuario</h2>
<br>
            <input class="inp" type="text" required="required" name="inputUser"/><br>

             <h2>Contraseña</h2>
<br>
            <input class="inp" type="password" required="required" name="pass"><br>
              
              <input type="checkbox" name="rememberMe" id="rememberMe" value="remember">Recuerda en este ordenador.
              <br>

            <a href="registro.php" class="he">¿No estás registrado?</a>
    
            <input class="boton" type="submit" name="inicio" value="Iniciar Sesión">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
