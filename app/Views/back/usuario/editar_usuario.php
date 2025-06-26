<div class="container mt-5">
    <p>ID: <?= $usuario['id_usuario'] ?></p>
    <!-- BORRAR DESPUES LO DE ARRIBA -->
    <h2>Editar Nombre de Usuario</h2>
    <form method="post" action="<?= base_url('/editar-usuario/' . $usuario['id_usuario']) ?>">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nuevo nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="<?= esc($usuario['nombre']) ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
        <a href="<?= base_url('/administrar') ?>" class="btn btn-secondary">Cancelar</a>
    </form>
</div>