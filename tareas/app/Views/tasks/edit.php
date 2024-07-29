<body style="background: url('/tareas/background2.gif'); background-size: cover;">
<div class="mt-4">
    <h2 style="color: white">Editar Tarea</h2>
    <form action="<?= site_url('/tasks/update/'.$task['id']) ?>" method="post" style="color: white">
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="<?= esc($task['titulo']) ?>" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required><?= esc($task['descripcion']) ?></textarea>
        </div>
        <div class="form-group">
            <label for="fecha_vencimiento">Fecha de Vencimiento:</label>
            <input type="date" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento" value="<?= esc($task['fecha_vencimiento']) ?>" required>
        </div>
        <div class="form-group" style="color: white">
            <label for="estado">Estado:</label>
            <select class="form-control" id="estado" name="estado" required>
                <option value="Pendiente" <?= $task['estado'] == 'Pendiente' ? 'selected' : '' ?>>Pendiente</option>
                <option value="En Progreso" <?= $task['estado'] == 'En Progreso' ? 'selected' : '' ?>>En Progreso</option>
                <option value="Completada" <?= $task['estado'] == 'Completada' ? 'selected' : '' ?>>Completada</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Tarea</button>
    </form>
    <p><a href="<?= site_url('/tasks') ?>" class="btn btn-secondary mt-2">Volver a la Lista de Tareas</a></p>
</div>
</body>
