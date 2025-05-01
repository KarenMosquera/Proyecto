<?php
// Conexión a la base de datos MySQL
$conex = mysqli_connect("localhost", "root", "", "nueva_agricola");

// Verificar si la conexión fue exitosa
if (!$conex) {
    die("Error en la conexión a la base de datos: " . mysqli_connect_error());
}

// URL de la API a la que deseas hacer la solicitud GET
$url = 'https://api.ejemplo.com/datos';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error en cURL: ' . curl_error($ch);
} else {
    $data = json_decode($response, true); 
    if (isset($data['campo'])) { 
        $campo = mysqli_real_escape_string($conex, $data['campo']); 

        $sql = "INSERT INTO tabla (campo) VALUES ('$campo')";

        if (mysqli_query($conex, $sql)) {
            echo "Datos insertados correctamente en la base de datos.";
        } else {
            echo "Error al insertar datos: " . mysqli_error($conex);
        }
    } else {
        echo "No se encontraron datos válidos para insertar.";
    }
}

// Cerrar la conexión cURL
curl_close($ch);

// Cerrar la conexión a la base de datos
mysqli_close($conex);
?>