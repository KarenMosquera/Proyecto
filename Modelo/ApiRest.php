<?php

// Encabezado para que la respuesta sea en formato JSON
header("Content-Type: application/json");

// Simulación de datos (en un caso real, deberías conectar a una base de datos)
$usuarios = [
    ['id' => 1, 'nombre' => 'Juan', 'email' => 'juan@ejemplo.com'],
    ['id' => 2, 'nombre' => 'Maria', 'email' => 'maria@ejemplo.com'],
    ['id' => 3, 'nombre' => 'Carlos', 'email' => 'carlos@ejemplo.com']
];

// Obtener el método de la solicitud (en este caso solo manejamos GET)
$metodo = $_SERVER['REQUEST_METHOD'];

// Verificar el tipo de solicitud (GET)
if ($metodo == 'GET') {
    // Verificar si se pide un usuario específico
    if (isset($_GET['id'])) {
        // Buscar el usuario por ID
        $id = $_GET['id'];
        $usuarioEncontrado = null;

        // Buscar el usuario en el arreglo (en un sistema real buscarías en la base de datos)
        foreach ($usuarios as $usuario) {
            if ($usuario['id'] == $id) {
                $usuarioEncontrado = $usuario;
                break;
            }
        }

        // Verificar si el usuario fue encontrado
        if ($usuarioEncontrado) {
            echo json_encode($usuarioEncontrado);
        } else {
            // Si no se encuentra el usuario
            echo json_encode(['error' => 'Usuario no encontrado']);
        }

    } else {
        // Si no se especifica un ID, devolver todos los usuarios
        echo json_encode($usuarios);
    }

} else {
    // Si el método no es GET, devolver un mensaje de error
    echo json_encode(['error' => 'Método no soportado']);
}

?>
