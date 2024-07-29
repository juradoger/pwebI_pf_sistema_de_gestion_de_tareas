<!DOCTYPE html>
<html>
<head>
    <title>Buscar Ruta</title>
</head>
<body>
    <h1>Buscar Ruta</h1>
    <form action="<?= base_url('search/route') ?>" method="post">
        <label for="route_name">Nombre de la Ruta:</label>
        <input type="text" id="route_name" name="route_name">
        <button type="submit">Buscar</button>
    </form>
    <?php if (isset($result)) : ?>
        <p><?= $result ?></p>
    <?php endif; ?>
</body>
</html>
