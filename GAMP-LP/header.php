<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catastro HAM-LP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos para cambiar el formato de la letra */
        .navbar-nav .nav-link {
            font-family: Arial, sans-serif; /* Cambia el tipo de letra aquí */
            font-size: 1.1rem; /* Cambia el tamaño de la letra aquí */
            transition: color 0.3s ease; /* Transición suave para el cambio de color */
        }

        .navbar-nav .nav-link.active {
            color: #0056b3; /* Color del enlace activo */
        }

        .navbar-nav .nav-link:hover {
            color: #ff7f50; /* Color al pasar el mouse sobre el enlace */
        }

        .logo-container {
            background-color: #003366; /* Color del fondo del contenedor */
            width: 100%; /* Asegura que el contenedor sea más ancho */
            padding: 30px 0; /* Ajusta el padding superior e inferior */
        }
    </style>
</head>
<body>

    <!-- Logo en la parte superior, centrado -->
    <div class="logo-container text-center">
        <img src="assets/logo.png" alt="Logo HAM-LP" class="img-fluid" style="max-width: 200px;"> <!-- Puedes ajustar el tamaño máximo de la imagen -->
    </div>

    <!-- Barra de menú debajo del logo -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="inicio.php">Inicio</a> <!-- Enlace activo -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Quienes somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tramites.php">Trámites y servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gobierno_abierto.php">Gobierno abierto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="normativa.php">Normativa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php">Contactos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
