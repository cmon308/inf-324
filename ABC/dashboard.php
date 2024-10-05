<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}
include('db.php');

// Registrar Persona
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register_person'])) {
    $ci = $_POST['ci'];
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];

    $stmt = $pdo->prepare("INSERT INTO PERSONA (ci, nombre, paterno, materno) VALUES (?, ?, ?, ?)");
    $stmt->execute([$ci, $nombre, $paterno, $materno]);
}

// Registrar Propiedad
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register_property'])) {
    $zona = $_POST['zona'];
    $direccion = $_POST['direccion'];
    $tipo = $_POST['tipo'];
    $superficie = $_POST['superficie'];
    $valor = $_POST['valor'];
    $ci_persona = $_POST['ci_persona'];

    $stmt = $pdo->prepare("INSERT INTO PROPIEDAD (zona, direccion, tipo, superficie, valor, ci_persona) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$zona, $direccion, $tipo, $superficie, $valor, $ci_persona]);
}

// Eliminar Propiedad
if (isset($_POST['delete_property'])) {
    $id = $_POST['property_id'];
    $stmt = $pdo->prepare("DELETE FROM PROPIEDAD WHERE id = ?");
    $stmt->execute([$id]);
}

// Actualizar Propiedad
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_property'])) {
    $id = $_POST['property_id'];
    $zona = $_POST['zona'];
    $direccion = $_POST['direccion'];
    $tipo = $_POST['tipo'];
    $superficie = $_POST['superficie'];
    $valor = $_POST['valor'];

    $stmt = $pdo->prepare("UPDATE PROPIEDAD SET zona = ?, direccion = ?, tipo = ?, superficie = ?, valor = ? WHERE id = ?");
    $stmt->execute([$zona, $direccion, $tipo, $superficie, $valor, $id]);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Panel de Administración</h1>

        <h2>Registrar Persona</h2>
        <form method="POST" class="mb-4">
            <div class="mb-3">
                <label for="ci" class="form-label">CI:</label>
                <input type="text" class="form-control" name="ci" required>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="paterno" class="form-label">Apellido Paterno:</label>
                <input type="text" class="form-control" name="paterno" required>
            </div>
            <div class="mb-3">
                <label for="materno" class="form-label">Apellido Materno:</label>
                <input type="text" class="form-control" name="materno" required>
            </div>
            <button type="submit" class="btn btn-primary" name="register_person">Registrar Persona</button>
        </form>

        <h2>Registrar Propiedad</h2>
        <form method="POST" class="mb-4">
            <div class="mb-3">
                <label for="zona" class="form-label">Zona:</label>
                <input type="text" class="form-control" name="zona" required>
            </div>
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección:</label>
                <input type="text" class="form-control" name="direccion" required>
            </div>
            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo:</label>
                <input type="text" class="form-control" name="tipo" required>
            </div>
            <div class="mb-3">
                <label for="superficie" class="form-label">Superficie (m²):</label>
                <input type="number" class="form-control" name="superficie" required>
            </div>
            <div class="mb-3">
                <label for="valor" class="form-label">Valor:</label>
                <input type="number" class="form-control" name="valor" required>
            </div>
            <div class="mb-3">
                <label for="ci_persona" class="form-label">CI del Dueño:</label>
                <input type="text" class="form-control" name="ci_persona" required>
            </div>
            <button type="submit" class="btn btn-primary" name="register_property">Registrar Propiedad</button>
        </form>

        <h2>Lista de Propiedades</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Zona</th>
                    <th>Dirección</th>
                    <th>Tipo</th>
                    <th>Superficie (m²)</th>
                    <th>Valor</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $stmt = $pdo->query("SELECT * FROM PROPIEDAD");
                while ($row = $stmt->fetch()) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['zona']}</td>
                        <td>{$row['direccion']}</td>
                        <td>{$row['tipo']}</td>
                        <td>{$row['superficie']}</td>
                        <td>{$row['valor']}</td>
                        <td>
                            <form method='POST' class='d-inline'>
                                <input type='hidden' name='property_id' value='{$row['id']}'>
                                <button type='submit' class='btn btn-danger' name='delete_property'>Eliminar</button>
                            </form>
                            <button class='btn btn-secondary' onclick=\"showEditModal({$row['id']}, '{$row['zona']}', '{$row['direccion']}', '{$row['tipo']}', {$row['superficie']}, {$row['valor']})\">Editar</button>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Modal para editar -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Editar Propiedad</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="property_id" id="edit_property_id">
                        <div class="mb-3">
                            <label for="zona" class="form-label">Zona:</label>
                            <input type="text" class="form-control" name="zona" id="edit_zona" required>
                        </div>
                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección:</label>
                            <input type="text" class="form-control" name="direccion" id="edit_direccion" required>
                        </div>
                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo:</label>
                            <input type="text" class="form-control" name="tipo" id="edit_tipo" required>
                        </div>
                        <div class="mb-3">
                            <label for="superficie" class="form-label">Superficie (m²):</label>
                            <input type="number" class="form-control" name="superficie" id="edit_superficie" required>
                        </div>
                        <div class="mb-3">
                            <label for="valor" class="form-label">Valor:</label>
                            <input type="number" class="form-control" name="valor" id="edit_valor" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary" name="update_property">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function showEditModal(id, zona, direccion, tipo, superficie, valor) {
            document.getElementById('edit_property_id').value = id;
            document.getElementById('edit_zona').value = zona;
            document.getElementById('edit_direccion').value = direccion;
            document.getElementById('edit_tipo').value = tipo;
            document.getElementById('edit_superficie').value = superficie;
            document.getElementById('edit_valor').value = valor;
            var modal = new bootstrap.Modal(document.getElementById('editModal'));
            modal.show();
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
