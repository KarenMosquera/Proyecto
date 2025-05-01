<?php
    $conex = mysqli_connect("localhost", "root", "", "nueva_agricola");

$servername = "localhost";  // o tu servidor de base de datos
$username = "root";         // tu nombre de usuario
$password = "";             // tu contraseña
$dbname = "nueva_agricola"; // tu nombre de base de datos

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
    echo "Conexión exitosa!";
}

?>