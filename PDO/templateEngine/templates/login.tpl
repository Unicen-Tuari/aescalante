<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Acceso Admin LNS</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="icon" type="" href="../images/icono.png">
  </head>
  <body>

    <div class="login-box">
      <img src="../images/image_login.jpg" class="avatar" alt="Avatar Image">
      <h1>Acceder</h1>
      <form action="access" method="POST">
        <label for="email">Mail</label>
        <input type="email" id="mail" name="mail" placeholder="Enter Username" required>
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="Enter Password" required>

        <input type="submit" value="Iniciar">

        <a href="registry">Regístrate</a><br>
        <a href="index">Vista Usuario</a><br>
      </form>
    </div>
  </body>
</html>