<div class="mt-4">
<h2>Editar Usuario</h2>
<form action="<?= site_url('/users/update/'.$user['id']) ?>"
method="post">
<div class="form-group">
<label for="name">Nombre:</label>
<input type="text" class="form-control" id="name" name="name"
value="<?= $user['name'] ?>">
</div>
<div class="form-group">
<label for="email">Email:</label>
<input type="email" class="form-control" id="email"
name="email" value="<?= $user['email'] ?>">
</div>
<button type="submit" class="btn btn-primary">Actualizar</button>
</form>
</div>