<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Persona</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Registro de Persona</h2>
        <form id="registro-form">
            <div class="form-group">
                <label for="ci">CI:</label>
                <input type="text" class="form-control" name="ci" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="paterno">Paterno:</label>
                <input type="text" class="form-control" name="paterno" required>
            </div>
            <div class="form-group">
                <label for="materno">Materno:</label>
                <input type="text" class="form-control" name="materno" required>
            </div>
            <div class="form-group">
                <label for="distrito">Distrito:</label>
                <select id="distrito" name="distrito" class="form-control" required>
                    <option value="">Seleccione un distrito</option>
                    <?php
                    // Conexión a la base de datos
                    require 'conexion.php'; 
                    // Obtener distritos
                    $stmt = $pdo->prepare("SELECT * FROM distritos");
                    $stmt->execute();
                    $distritos = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($distritos as $distrito) {
                        echo "<option value='{$distrito['id']}'>{$distrito['nombre']}</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="zona">Zona:</label>
                <select id="zona" name="zona" class="form-control" required>
                    <option value="">Seleccione una zona</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Registrar Persona</button>
        </form>
    </div>

    <script>
        // AJAX para obtener zonas según el distrito seleccionado
        $(document).ready(function() {
            $('#distrito').change(function() {
                var distritoId = $(this).val();
                if (distritoId) {
                    $.ajax({
                        url: 'get_zonas.php',
                        type: 'POST',
                        data: {distrito_id: distritoId},
                        dataType: 'json',
                        success: function(data) {
                            $('#zona').empty();
                            $('#zona').append('<option value="">Seleccione una zona</option>');
                            $.each(data, function(index, zona) {
                                $('#zona').append('<option value="' + zona.id + '">' + zona.nombre + '</option>');
                            });
                        }
                    });
                } else {
                    $('#zona').empty();
                    $('#zona').append('<option value="">Seleccione una zona</option>');
                }
            });
        });
    </script>
</body>
</html>
