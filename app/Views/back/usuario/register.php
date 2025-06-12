
<!-- FORMULARIO HORIZONTAL DE BOOTSTRAP -->

<div class="container w-75 h-auto mt-4 mb-4 bg-white p-4 rounded shadow" >
    <form class="login">

     <span class="fs-3  ">REGISTRARSE</span>

     <!-- NOMBRE Y APELLIDO -->
     <div class="row mb-3 mt-4">
  <div class="col">
  
    <input name="nombre" type="text" class="form-control" placeholder="Nombre" aria-label="First name">
  </div>


  <div class="col">
    <input name="apellido" type="text" class="form-control" placeholder="Apellido" aria-label="Last name">
  </div>
</div>

<!--USUARIO, EMAIL Y PASSWORD -->
  <div class="row mb-3">
    <label for="inputUsuario3" class="col-sm-2 col-form-label">Usuario</label>
    <div class="col-sm-3">
      <input name="usuario" type="text" class="form-control" id="inputUsuario3" name="usuario">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-6">
      <input name="email" type="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
    <div class="col-sm-4">
      <input name="pass" type="password" class="form-control" id="inputPassword3">
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

  <button type="submit" class="btn btn-primary">Registrarse</button>
  <a href="<?= base_url('/') ?>" class="btn btn-danger">Cancelar</a>
</form>

</div>