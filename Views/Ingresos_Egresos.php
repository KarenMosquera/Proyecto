<!DOCTYPE html>
<html>
<head>
<>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ingreso_Egreso</title>
  <link rel="stylesheet" href="../Views/style.css" />
  <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet" />
  
    <title>Ingreso_Egreso</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <li><a href="Registro_General.php"></a></li> 


<h1>Registro General</h1>

<div class="input-box">
    <form action="/Ingreso_Egreso.html" method="get">
    <label for="editor"> Ingreso o Egreso</label>
    <select name="Ingreso_Egreso" id="Ingreso_Egreso">
        <option value="Ingreso">Ingreso</option>
        <option value="Egreso">Egreso</option>
        <i class='bx bxs-message-alt-minus'></i>

    </select>
    <br><br>

</form>
</div>
<div class="input-box">
    <input type="text" placeholder="Nombre" required>
    <i class='bx bxs-message-alt-minus'></i>
  </div>
  <br><br>
  <div class="input-box">
    <input type="number" placeholder="Cantidad" required>
    <i class="bx bx-phone"></i>
  </div>
  <br><br>
  <div class="input-box">
    <input type="text" placeholder="Descripcion" required>
    <i class="bx bx-envelope"></i>
  </div>
  <br><br>
  <div class="input-box">
    <input type="text" placeholder="Observaciones" required>
    <i class="bx bx-envelope"></i>
  </div>
  <br><br>
  <a href="Registro_General.php">
</div>
<a href="Registro_General.php">
<button style="background-color: white; color: black; text-decoration: none; padding: 10px 20px; border: 1px solid #ccc; display: inline-block; text-align: center;" type="submit" class="btn"> Guardar</button></a>
</header>


<?php
  // Incluyendo el archivo de usuario si es necesario para manejar datos del registro.
  include("../Modelo/Inicio_sesion.php");
  ?>
</body>
</html>