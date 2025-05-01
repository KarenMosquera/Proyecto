<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inicio de Sesión | Codehal</title>
  <link rel="stylesheet" href="../Views/style.css" />
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet" />
</head>

<body>
  <div class="wrapper">
    <h1>Inicio De Sesión</h1>
    <form action="login.php" method="POST">
      <div class="input-box">
        <input type="email" placeholder="Correo" name="Correo" required />
        <i class="bx bxs-user"></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Contraseña" name="Contraseña" required />
        <i class="bx bxs-lock"></i>
      </div>
      <div class="remember-forgot">
        <a href="#">Olvidé mi contraseña</a>
      </div>
        <input type="submit" value="Iniciar Sesión" class="btn" name="Iniciar_Sesion" />
    </form>
    <div class="register-link">
      <p>¿No tienes cuenta? <a href="Registrarse.php">Regístrate</a></p>
    </div>
  </div>

  <?php
  // Incluyendo el archivo de usuario si es necesario para manejar datos del registro.
  include("../Modelo/Inicio_sesion.php");
  ?>

</body>

</html>
