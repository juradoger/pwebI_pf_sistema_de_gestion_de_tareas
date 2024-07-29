<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    <link rel="stylesheet" href="<?= base_url('styles/style.css') ?>">
</head>
<body style="background: url('/tareas/background2.gif'); background-size: cover;">
    <div class="mt-4">
        <a href="<?= site_url('/tasks/create') ?>" class="btn btn-primary">Nueva Tarea</a>
        <table class="table table-bordered mt-2">
            <thead>
                <tr style="color: white">
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Fecha Vencimiento</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody style="color: white">
                <?php foreach($tasks as $task): ?>
                <tr>
                    <td><?= $task['titulo'] ?></td>
                    <td><?= $task['descripcion'] ?></td>
                    <td><?= $task['fecha_vencimiento'] ?></td>
                    <td><?= $task['estado'] ?></td>
                    <td>
                        <a href="<?= site_url('tasks/edit/'.$task['id']) ?>" class="btn btn-warning btn-sm">Editar</a>
                        <form action="<?= site_url('tasks/delete/'.$task['id']) ?>" method="post" style="display:inline-block;">
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
