<!-- INICIO NAVBAR -->
<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');

// $session = session();
// echo '<pre>';
// print_r($session->get());
// echo '</pre>';
?>



<nav class="navbar navbar-expand-lg mi-navbar-bg">
  <div class="container-fluid">
    <!-- AGREGO MI CODIGO DE IMAGEN DE LOGO -->
    <a class="navbar-brand me-5" href="#">
      <img src="assets/img/logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top" id="logoModalBtn">


      <!-- Modal -->
      <div class="modal fade" id="logoModal" tabindex="-1" aria-labelledby="logoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="logoModalLabel">¡Bien hecho!</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
              ¡Encontraste un código secreto! <br>
              Úsalo para tener un 10% de descuento en tu próximo pedido!
              <br>
              CODIGO: <strong>DESCUENTO10</strong>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
          </div>
        </div>
      </div>

    </a>

    <!-- FIN DEL MODAL -->

    <!-- FIN IMAGEN DE LOGO -->

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <a class="navbar-brand" href="#">Más</a><span class="navbar-toggler-icon"></span>
    </button>

    <!-- PERFILES DE SESION ** falta codigo, se prueba primero que diga ADMIN -->
    <div class="mx-auto" style="width: 60%;">
      <!-- PERFIL ADMINISTRADOR -->
      <?php if (session()->perfil_id == 1): ?>

        <div class="btn btn-secondary active btnUser btn-sm">
          <a href="">ADMIN: <?php echo session('nombre'); ?></a>



          <!-- BOTON DE CERRAR SESION -->
          <?php if (session()->get('logged_in')): ?>
            <a href="<?= base_url('/logout') ?>" class="btn btn-outline-danger btn-sm ms-2">Cerrar sesión</a>

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active fs-4" href="<?= base_url('/') ?>">Principal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active fs-4" href="<?= base_url('/administrar') ?>">Administrar usuarios</a>
              </li>
        </div>
      <?php endif; ?>

      <!-- PERFIL CLIENTE ** FALTA CODIGO. SOLO SE PRUEBA QUE DIGA CLIENTE -->
    <?php elseif (session()->perfil_id == 2): ?>
      <div class="btn btn-info active btnUser btn-sm">
        <a href="">CLIENTE: <?php echo session('nombre'); ?></a>


        <!-- BOTON DE CERRAR SESION -->
        <?php if (session()->get('logged_in')): ?>
          <a href="<?= base_url('/logout') ?>" class="btn btn-outline-danger btn-sm ms-2">Cerrar sesión</a>
        <?php endif; ?>

        <!-- NAVBAR DE CLIENTE -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active fs-4" href="<?= base_url('/') ?>">Principal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fs-4" href="<?= base_url('/quienes_somos') ?>">Quienes somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fs-4" href="<?= base_url('/acerca_de') ?>">Acerca de</a>
          </li>


        </ul>
      </div>

      <!-- PERFIL NO LOGUEADO ** FALTA CODIGO. SOLO SE PRUEBA QUE DIGA NO LOGUEADO -->
    <?php else: ?>
      <div class="btn btn-info active btnUser btn-sm">
        <a href="">NO LOGUEADO </a>
      </div>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active fs-4" href="<?= base_url('/') ?>">Principal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fs-4" href="<?= base_url('/quienes_somos') ?>">Quienes somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fs-4" href="<?= base_url('/acerca_de') ?>">Acerca de</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fs-4" href="<?= base_url('/register') ?>">Registrarse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fs-4" href="<?= base_url('/login') ?>">Login</a>
          </li>

        </ul>
        <form class="d-flex pt-2" role="search">
          <input class="form-control me-2 font-search" type="search" placeholder="¿Qué buscas?" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      <?php endif; ?>
      </div>
    </div>
  </div>
</nav>



<!-- FIN NAVBAR -->