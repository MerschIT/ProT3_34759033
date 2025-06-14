
<!-- FORMULARIO HORIZONTAL DE BOOTSTRAP -->

<div class="container w-75 h-auto mt-4 mb-4 bg-white p-4 rounded shadow" >
    <form class="login">

     <span class="fs-3  ">REGISTRARSE</span>

<?php $validation = \Config\Services::validation(); ?>
 <form method="post" action="<?php echo base_url('/enviar-form') ?>" >
     <?php csrf_field(); ?> 

    <?php if(!empty(session()->getFlashdata('fail'))): ?>
      <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
    <?php endif?>
    <?php if(!empty(session()->getFlashdata('success'))): ?>
      <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div> 
    <?php endif?>
     

     <!-- NOMBRE Y APELLIDO -->
     <div class="row mb-3 mt-4">
  <div class="col">
         
     <!-- <label for="exampleFormControlInput1" class="form-label">Nombre</label> -->
    <input name="nombre" type="text" class="form-control" placeholder="Nombre" aria-label="First name">
  
  <!-- ERROR -->
 <?php if($validation->getError('nombre')) {?>
    <div class="alert alert-danger mt-2">
      <?= $error= $validation->getError('nombre'); ?>
    </div>
    <?php }?>
  </div>

  <div class="col">
    <input name="apellido" type="text" class="form-control" placeholder="Apellido" aria-label="Last name">
    <!-- ERROR -->
 <?php if($validation->getError('apellido')) {?>
    <div class="alert alert-danger mt-2">
      <?= $error= $validation->getError('apellido'); ?>
    </div>
    <?php }?>
  </div>
</div>

<!--USUARIO, EMAIL Y PASSWORD -->
  <div class="row mb-3">
    <label for="inputUsuario3" class="col-sm-2 col-form-label">Usuario</label>
    <div class="col-sm-3">
      <input name="usuario" type="text" class="form-control" id="inputUsuario3" name="usuario">
    <!-- ERROR -->
 <?php if($validation->getError('usuario')) {?>
    <div class="alert alert-danger mt-2">
      <?= $error= $validation->getError('usuario'); ?>
    </div>
    <?php }?>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-6">
      <input name="email" type="email" class="form-control" id="inputEmail3">
    <!-- ERROR -->
 <?php if($validation->getError('email')) {?>
    <div class="alert alert-danger mt-2">
      <?= $error= $validation->getError('email'); ?>
    </div>
    <?php }?>    
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
    <div class="col-sm-4">
      <input name="pass" type="password" class="form-control" id="inputPassword3">
    <!-- ERROR -->
 <?php if($validation->getError('apellido')) {?>
    <div class="alert alert-danger mt-2">
      <?= $error= $validation->getError('pass'); ?>
    </div>
    <?php }?>
    
    </div>
  </div>

  <!-- CHECK FORM -->
  <div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Quiero recibir ofertas y combos exclusivos por email
        </label>
      </div>
    </div>
  </div>

  <!-- BOTONES -->

  <input type="submit" value="guardar" class="btn btn-success">
  <input type="reset" value="cancelar" class="btn btn-danger">
</form>

</div>