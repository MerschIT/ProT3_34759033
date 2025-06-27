    <div class="container mt-5">
        <h2>Editar Nombre de Usuario</h2>
        <form method="POST" action="<?= base_url('/editar-usuario/' . $usuario['id_usuario']) ?>">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nuevo nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?= esc($usuario['nombre']) ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
            <a href="<?= base_url('/administrar') ?>" class="btn btn-secondary">Cancelar</a>
        </form>

        <!-- Aquí va la tabla de usuarios, fuera del form -->
        <div class="mt-5">
            <h3>Lista de Usuarios</h3>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Usuario</th>
                        <th>Email</th>
                        <th>Perfil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($usuarios)): ?>
                        <?php foreach ($usuarios as $u): ?>
                            <tr>
                                <td><?= esc($u['id_usuario']) ?></td>
                                <td><?= esc($u['nombre']) ?></td>
                                <td><?= esc($u['apellido']) ?></td>
                                <td><?= esc($u['usuario']) ?></td>
                                <td><?= esc($u['email']) ?></td>
                                <td><?= esc($u['perfil_id']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6">No hay usuarios registrados.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>