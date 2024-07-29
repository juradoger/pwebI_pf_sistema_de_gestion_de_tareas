<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body style="background: url('background.gif') no-repeat center center fixed; background-size: cover;">
    <div class="welcome">
        <h1 class="bien">Bienvenido a tu registro de tareas</h1>
    </div>
    <div class="login-container">
            <div class="login-header">
            <img src="usericon.png" alt="User Icon" class="usericon">
            </div>
        <h2 style="color: white">Iniciar Sesión:</h2>
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php endif; ?>
        <form action="<?= site_url('/users/login') ?>" method="post">
            <div class="form-group">
                <label for="name" style="color: white">Username:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="password" style="color: white">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Continuar</button>
        </form>
        <p style="color: white">¿No tienes cuenta?</p>
        <a href="<?= site_url('/users/create') ?>">Regístrate ahora</a>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                document.querySelector(".welcome").style.display = "none";
                document.querySelector(".login-container").style.display = "block";
            }, 3000);
        });
    </script>
</body>
</html>
