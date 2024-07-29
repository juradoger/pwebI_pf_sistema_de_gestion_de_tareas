<body style="background: url('/tareas/background2.gif'); background-size: cover;">
<div class="mt-4">
    <h2 style="color: white">Crear Nueva Tarea</h2>
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>
    <form action="<?= site_url('/tasks/store') ?>" method="post" style="color: white">
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="fecha_vencimiento">Fecha de Vencimiento:</label>
            <input type="date" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <select class="form-control" id="estado" name="estado" required>
                <option value="Pendiente">Pendiente</option>
                <option value="En Progreso">En Progreso</option>
                <option value="Completada">Completada</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Tarea</button>
    </form>
    <p><a href="<?= site_url('/tasks') ?>" class="btn btn-secondary mt-2">Volver a la Lista de Tareas</a></p>
</div>
</body>
