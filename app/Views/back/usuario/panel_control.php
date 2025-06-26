<div class="container mt-5">
    <h2>Panel de Control de Usuarios</h2>
    <?php if (session()->getFlashdata('msg')): ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>

    <form class="row g-3" method="get" action="">
        <div class="col-auto">
            <label for="userId" class="visually-hidden">ID de Usuario</label>
            <input type="number" class="form-control" id="userId" name="user_id" placeholder="ID de usuario" required>
        </div>
        <div class="col-auto">
            <!-- Botón Editar (puedes enlazarlo a tu función de editar) -->
            <a href="#" id="editBtn" class="btn btn-primary"
                onclick="editarUsuario(); return false;">Editar usuario</a>
        </div>
        <div class="col-auto">
            <!-- Botón Borrar -->
            <a href="#" id="deleteBtn" class="btn btn-danger"
                onclick="borrarUsuario(); return false;">Borrar usuario</a>
        </div>
    </form>
</div>

<script>
    function borrarUsuario() {
        let userId = document.getElementById('userId').value;
        if (userId && confirm('¿Seguro que quieres borrar el usuario con ID ' + userId + '?')) {
            window.location.href = "<?= base_url('/borrar-usuario/') ?>" + userId;
        }
    }

    function editarUsuario() {
        let userId = document.getElementById('userId').value;
        if (userId) {
            window.location.href = "<?= base_url('/editar-usuario/') ?>" + userId;
        }
    }
</script>