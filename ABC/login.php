<?php
session_start();
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $admin_user = 'admin';
    $admin_pass = 'admin123';

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar si es admin
    if ($username == $admin_user && $password == $admin_pass) {
        $_SESSION['loggedin'] = true;
        $_SESSION['role'] = 'admin';
        header("Location: dashboard.php");
        exit;
    }

    // Verificar si es un usuario
    $stmt = $pdo->prepare("SELECT * FROM PERSONA WHERE nombre = ? AND ci = ?");
    $stmt->execute([$username, $password]);
    $person = $stmt->fetch();

    if ($person) {
        $_SESSION['loggedin'] = true;
        $_SESSION['role'] = 'user';
        $_SESSION['ci'] = $person['ci'];
        header("Location: user_dashboard.php");
        exit;
    }

    $error = "Usuario o contraseña incorrectos.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="text-center">Iniciar Sesión</h2>
                <?php if (isset($error)) { echo "<div class='alert alert-danger'>$error</div>"; } ?>
                <form method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña (CI):</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
