<!-- FORMULARIO HORIZONTAL DE BOOTSTRAP -->

<div class="container w-75 h-auto mt-4 mb-4 bg-white p-4 rounded shadow">

  <form class="login">

    <span class="fs-3  ">CONECTARSE</span>

    <!-- Mensaje de error -->
    <?php if (session()->getFlashdata('msg')): ?>
      <div class="alert alert-warning">
        <?= session()->getFlashdata('msg') ?>
      </div>
    <?php endif; ?>

    <!-- Inicio del formulario de login -->
    <form method="post" action="<?= base_url('/enviarlogin') ?>">

      <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
          <?= session()->getFlashdata('success') ?>
        </div>
      <?php endif; ?>

      <?php if (session()->getFlashdata('fail')): ?>
        <div class="alert alert-danger">
          <?= session()->getFlashdata('fail') ?>
        </div>
      <?php endif; ?>
      <div class="row mb-3 mt-4">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword3">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-10 offset-sm-2">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck1">
            <label class="form-check-label" for="gridCheck1">
              Recordar usuario y contraseña
            </label>
          </div>
        </div>
      </div>
      <input type="submit" value="Ingresar" class="btn btn-success">
      <a href="<?= base_url('login') ?>" class="btn btn-danger">Cancelar</a>

      <p class="mt-3">¿No tienes cuenta? <a href="<?= base_url('/register') ?>">Regístrate aquí</a></p>

    </form>

</div>