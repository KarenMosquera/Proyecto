<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Agricola Eficiente</title>
    <link rel="icon" href="Imagenes/Zanahoria.png" type="image/png">


    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        header {
            background-color: #e386d1 ;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #264adc;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 15px 20px;
        }

        nav a:hover {
            background-color: #7f93e8 ;
        }

        .container {
            text-align: center;
            padding: 50px 20px;
        }

        footer {
            background-color: #f0d1ea ;
            color: white;   
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <h1>Bienvenido a Agricola Eficiente</h1>
        <p>Tu espacio para crear y explorar</p>
    </header>
    <nav>
        <a href="login.php">Inicio Sesión</a>
        <a href="Servicios.php">Servicios</a>
        <a href="registrarse.php">Registrarse</a>
    </nav>
    <div class="container">
        <h2>¡Explora nuestro contenido!</h2>
        <p>
            Esta plataforma está diseñada para optimizar la gestión de recursos agrícolas,
            orientar las actividades, a demás de controlar los ingresos y egresos
            que se generan a diario, ya que la agricultura desempeña un papel
            fundamental en la economía y la subsistencia de numerosas comunidades.

        </p>
        <button onclick="alert('Gracias por visitarnos!')">¡Comienza ahora!</button>
    </div>
    <footer>
        <p>&copy; 2024 Mi Sitio Web. Todos los derechos reservados.</p>
    </footer>
</body>

</html>