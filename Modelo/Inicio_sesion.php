<?php
include("conexion.php");
session_start();

// Iniciar sesión para el manejo de sesiones

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Iniciar_Sesion'])) {
    if (!empty($_POST['Correo']) && !empty($_POST['Contraseña'])) {
        $Correo = mysqli_real_escape_string($conex, trim($_POST['Correo']));
        $Contraseña = mysqli_real_escape_string($conex, trim($_POST['Contraseña']));

        // Consulta para verificar si el correo existe
        $consulta_verificar_correo = "SELECT * FROM usuarios WHERE Correo = '$Correo'";
        $resultado_verificar_correo = mysqli_query($conex, $consulta_verificar_correo);

        if (mysqli_num_rows($resultado_verificar_correo) > 0) {
            // El correo existe, ahora verificamos la contraseña
            $consulta_verificar_contraseña = "SELECT * FROM usuarios WHERE Correo = '$Correo' AND Contraseña = '$Contraseña'";
            $resultado_verificar_contraseña = mysqli_query($conex, $consulta_verificar_contraseña);

            if (mysqli_num_rows($resultado_verificar_contraseña) > 0) {
                // Inicio de sesión exitoso
                $_SESSION['usuario'] = $Correo;
                header("Location:Servicios.php"); 
                exit();
            } else {
                $_SESSION['error'] = "La contraseña es incorrecta.";
            }
        } else {
            $_SESSION['error'] = "El correo no está registrado. Por favor, regístrese.";
        }
    } else {
        $_SESSION['error'] = "Por favor, complete todos los campos.";
    }

    // Redirigir al mismo formulario para mostrar mensajes de error
    header("Location: login.php");
    exit();
}

// Mostrar errores almacenados en la sesión
if (isset($_SESSION['error'])) {
    echo "<script>alert('" . $_SESSION['error'] . "');</script>";
    unset($_SESSION['error']); // Eliminar el mensaje después de mostrarlo
}
?>
