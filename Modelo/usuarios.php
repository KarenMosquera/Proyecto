<?php 
include("conexion.php");

if (isset($_POST['Registrar'])) {
    if (!empty($_POST['Nombre']) && !empty($_POST['Telefono']) && !empty($_POST['Correo']) && !empty($_POST['Contraseña'])) {
        $Nombre = mysqli_real_escape_string($conex, trim($_POST['Nombre']));
        $Telefono = mysqli_real_escape_string($conex, trim($_POST['Telefono']));
        $Correo = mysqli_real_escape_string($conex, trim($_POST['Correo']));
        $Contraseña = mysqli_real_escape_string($conex, trim($_POST['Contraseña']));

        // Consulta para verificar si el correo ya está registrado
        $consulta_verificar = "SELECT * FROM usuarios WHERE Correo = '$Correo'";
        $resultado_verificar = mysqli_query($conex, $consulta_verificar);

        if (mysqli_num_rows($resultado_verificar) > 0) {
            // Si el correo ya existe
            echo "<script>alert('El correo ya está registrado. Por favor, use otro.');</script>";
        } else {
            // Registrar al usuario 

            $Contraseña = password_hash($Contraseña, PASSWORD_BCRYPT);

            $consulta = "INSERT INTO usuarios (Nombre, Telefono, Correo, Contraseña) VALUES ('$Nombre','$Telefono','$Correo','$Contraseña')";
            $resultado = mysqli_query($conex, $consulta);

            if ($resultado) {
                echo "<script>alert('Usuario registrado correctamente')
                window.location.href='login.php';</script>";
            } else {
                echo "<script>alert('Algo salió mal. Inténtelo de nuevo.');</script>";
            }
        }
    } else {
        echo "<script>alert('Por favor, complete todos los campos.');</script>";
    }
}
?>
