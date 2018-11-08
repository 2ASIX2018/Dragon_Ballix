<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>

    <link rel="stylesheet" href="css/login.css" type="text/css" media="all">
  </head>
  <body>
    <div class="contenedor">

      <div class="login">
        <article class="fondo">
          <h3>Inicio de Sesión</h3>

          

          <form action="index.php" method="post">
          <h2>Usuario</h2>
<br>
            <input class="inp" type="text" name="user" value=""><br>

             <h2>Contraseña</h2>
<br>
            <input class="inp" type="password" name="pass" value=""><br>

            <a href="registro.php" class="he">¿No estás registrado?</a>
            <input class="boton" type="submit" name="inicio" value="Iniciar Sesión">
          </form>
        </article>
      </div>
    </div>
  </body>
</html>
