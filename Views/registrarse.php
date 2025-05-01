<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrarse | Formulario</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="wrapper">
      <h1>Registrarse</h1>
      <!-- Formulario para registrar usuario -->
      <form action="registrarse.php" method="POST">
        <div class="input-box">
          <input type="text" placeholder="Nombre" name="Nombre" required />
          <i class="bx bxs-message-alt-minus"></i>
        </div>
        <div class="input-box">
          <input type="number" placeholder="Teléfono" name="Telefono" required />
          <i class="bx bx-phone"></i>
        </div>
        <div class="input-box">
          <input type="email" placeholder="Correo" name="Correo" required />
          <i class="bx bx-envelope"></i>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Contraseña" name="Contraseña" required />
          <i class="bx bxs-lock"></i>
        </div>
        <input value="Registrarme" type="submit" class="btn" name="Registrar" />
      </form>

      <!-- Botón de cancelar -->
      <br />
      <a href="login.php" class="btn" style="background-color: gray; color: white; display: inline-block; text-align: center; padding: 10px 20px; text-decoration: none;">Cancelar</a>

      <div class="register-link"></div>
    </div>

    <?php
    // Incluyendo el archivo de usuario si es necesario para manejar datos del registro.
    include("../Modelo/usuarios.php");
    ?>

   
  </body>
</html>