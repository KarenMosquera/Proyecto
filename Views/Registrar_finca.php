<!DOCTYPE html>
<html>

<head>
  <title>Crear Finca</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="wrapper">
    <h1>Registrar Finca</h1>
    <form action="Registrar_finca.php" method="POST">
      <div class="input-box">
        <input type="text" placeholder="Nombre de la finca" name="NombreFinca" required>
        <i class='bx bxs-message-alt-minus'></i>
      </div>
      <button type="submit" class="btn" name="Registrarfinca">Registrar Finca</button></a>
    </form>

    <br>
    <a href="Servicios.php">
    <button style="background-color: gray; color: white;" type="submit" class="btn">Cancelar</button>
    </a>
  </div>
  <div class="register-link"></div>
  </div>
  <?php
  // Incluyendo el archivo de usuario si es necesario para manejar datos del registro.
  include("../Modelo/Crear_finca");
  ?>
</body>

</html>