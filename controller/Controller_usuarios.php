<?php

require_once("/xampp/htdocs/Proyecto/modelo/usuarios.php");
require_once("/xampp/htdocs/Proyecto/Modelo/Incio_sesion.php");

class Controller_usuarios  {
    private $usuarios;

    public function registrarUsuario($Nombre, $Telefono, $Correo, $Contraseña) {
        // Validamos que los campos no estén vacíos
        if (!empty($Nombre) && !empty($Telefono) && !empty($Correo) && !empty($Contraseña)) {
            $resultado = $this->usuarios->registrar_usuario($Nombre, $Telefono, $Correo, $Contraseña);

            if ($resultado) {
                return '<h3 class="ok">Usuario registrado correctamente</h3>';
            } else {
                return '<h3 class="error">Error al registrar usuario</h3>';
            }
        } else {
            return '<h3 class="error">Por favor, complete todos los campos</h3>';
        }
    }
}
class Controller_Login  {
    private $usuarios;

    public function registrarUsuario($Correo, $Contraseña) {
        // Validamos que los campos no estén vacíos
        if (!empty($Correo) && !empty($Contraseña)) {
            $resultado = $this->usuarios->validar_usuario( $Correo, $Contraseña);

            if ($resultado) {
                return '<h3 class="ok">Usuario registrado correctamente</h3>';
            } else {
                return '<h3 class="error">Error al registrar usuario</h3>';
            }
        } else {
            return '<h3 class="error">Por favor, complete todos los campos</h3>';
        }
    }
}
?>


