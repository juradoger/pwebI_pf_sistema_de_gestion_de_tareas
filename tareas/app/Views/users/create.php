<div class="mt-4">
    <h2>Registrarse</h2>
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>
    <form action="<?= site_url('/users/store') ?>" method="post">
        <div class="form-group">
            <label for="name">Username:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirmar Contraseña:</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>
    <p>¿Ya tienes cuenta?</p>
    <a href="<?= site_url('/users/iniciar') ?>">Iniciar Sesión</a>
</div>
