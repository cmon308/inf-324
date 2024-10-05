<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <!-- Fuente personalizada -->
    <style>
        body {
            font-family: 'Roboto', sans-serif; /* Cambia la fuente del cuerpo */
        }
    </style>
    <title>Inicio - HAM-LP</title>
</head>
<body>

    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Imagen Principal -->
    <div class="container-fluid p-0">
        <img src="assets/images/imagen_grande.jpg" alt="Imagen Grande" class="img-fluid">
    </div>

    <!-- Contenido Principal -->
    <div class="container mt-4">
        <h2 class="text-center">Tu Alcaldía</h2>
        <div class="row mt-4">
            <div class="col-md-6 mb-4">
                <div class="card text-dark" style="background-color: #b2e0f8;">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-size: 1.75rem;">Misión Institucional</h5>
                        <p class="card-text" style="font-size: 1.25rem;">
                            Somos una institución pública municipal renovada, dinámica, transparente e incluyente, que brinda servicios públicos modernos, eficientes, ágiles y planificados, con concertación y participación ciudadana, impulsando una convivencia pacífica en búsqueda de una mejor calidad de vida de la población paceña por el Bien Común.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 offset-md-6"> <!-- Usa offset para mover la visión a la derecha -->
                <div class="card text-dark" style="background-color: #b2e0f8;">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="font-size: 1.75rem;">Visión Institucional</h5>
                        <p class="card-text" style="font-size: 1.25rem;">
                            Ser una institución pública modelo de gestión municipal democrática, participativa, transparente, eficiente, innovadora y tecnológica, que dinamiza la economía, el desarrollo social y territorial; consolidando una La Paz saludable, productiva, competitiva, biodiversa y resiliente, cultural, ordenada e interconectada, con diálogo y reconciliación por el Bien Común.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
