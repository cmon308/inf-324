<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
    <title>¿Quiénes somos? - HAM-LP</title>
</head>
<body>

    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Contenido Principal -->
    <div class="container mt-4">
        <h2 class="text-center">¿Quiénes somos?</h2>
        
        <!-- Unidades Municipales -->
        <div class="accordion mt-4" id="accordionUnidades">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingUnidades">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUnidades" aria-expanded="true" aria-controls="collapseUnidades">
                        Unidades Municipales
                    </button>
                </h2>
                <div id="collapseUnidades" class="accordion-collapse collapse show" aria-labelledby="headingUnidades" data-bs-parent="#accordionUnidades">
                    <div class="accordion-body">
                        <ul>
                            <li>Despacho Municipal</li>
                            <li>Secretarías Municipales</li>
                            <li>Subalcaldías</li>
                            <li>Desconcentradas</li>
                            <li>Descentralizadas</li>
                            <li>Hospitales</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Información Institucional -->
        <div class="accordion mt-4" id="accordionInformacion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingInformacion">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseInformacion" aria-expanded="true" aria-controls="collapseInformacion">
                        Información Institucional
                    </button>
                </h2>
                <div id="collapseInformacion" class="accordion-collapse collapse show" aria-labelledby="headingInformacion" data-bs-parent="#accordionInformacion">
                    <div class="accordion-body">
                        <h6>Documentos Municipales:</h6>
                        <ul>
                            <li>Manual de Organizaciones y Funciones 2024</li>
                            <li>Organigrama del Órgano Ejecutivo Municipal 2024</li>
                            <li>Plan Estratégico Institucional 2021-2025</li>
                            <li>Manual de Organizaciones y Funciones MOF 2023</li>
                            <li><a href="#" class="link-primary">Ver más</a></li>
                        </ul>
                        <h6>Normativa Municipal:</h6>
                        <ul>
                            <li>Decretos Municipales</li>
                            <li>Leyes Municipales</li>
                            <li><a href="#" class="link-primary">Ver más</a></li>
                        </ul>
                        <h6>Trabaja con nosotros:</h6>
                        <ul>
                            <li>Convocatorias y Contrataciones</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Biografía -->
        <div class="mt-4">
            <h4 class="text-center">Biografía</h4>
            <div class="row mt-3">
                <div class="col-md-4">
                    <img src="assets/images/biografia_persona.png" alt="Biografía Persona" class="img-fluid rounded-circle">
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <p style="text-align: justify;">
                                Hernán Iván Arias Durán nació en La Paz el 8 de agosto de 1958. Es sociólogo, periodista y analista político boliviano, también conocido como “El Negro Arias”. Es el actual alcalde de la ciudad de La Paz. Asumió el mando municipal el 3 de mayo de 2021.
                            </p>
                            <p style="text-align: justify;">
                                En la gestión pública fue Secretario Privado de Víctor Hugo Cárdenas, primer vicepresidente indígena de Bolivia. Participó en el equipo que diseñó e implementó la Ley 1551 de Participación Popular de 1994 que inició la era municipal en Bolivia, trabajó con gobiernos autónomos —a nivel nacional e internacional— los temas referidos a la generación de valor público y el desarrollo económico local sostenible.
                            </p>
                            <p style="text-align: justify;">
                                Su afinidad y trabajo cotidiano con los movimientos campesinos a la cabeza de la Confederación Sindical Única de Trabajadores Campesinos de Bolivia (CUSTCB) y de líderes como Genaro Flores, lo llevaron a acercarse al emergente mundo indígena de tierras bajas.
                            </p >
                        </div>
                        <div class="col-md-6">
                            <p style="text-align: justify;">
                                La aplicación de la participación popular (de 1994 en adelante) posibilitó que el ahora alcalde ejerza el don de cercanía y calidez con la gente. Viajó por todos los municipios de Bolivia, ya sea en transporte aéreo, terrestre, naval o a pie; llevando el municipalismo a cada espacio social y territorial del país.
                            </p>
                            <p style="text-align: justify;">
                                El año 2000, en el gobierno del Gral. Hugo Banzer Suárez, junto a otros actores fue invitado a diseñar y ejecutar el “Diálogo Nacional 2000” para definir, desde el ámbito local, el destino y uso de más de 1.500 millones de dólares provenientes de la condonación de la deuda externa (recursos HIPC).
                            </p>
                            <p style="text-align: justify;">
                                El 3 de mayo de 2021, Arias fue posesionado como el nuevo alcalde de La Paz. El acto fue realizado en el hall del Tribunal Departamental de Justicia La Paz, con él juraron los nuevos concejales del municipio.
                            </p>
                        </div>
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
