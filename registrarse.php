<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<form method="POST" action="registrarseDB.php">

<div class="col-md-3">
  <label for="validationCustom01" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" value="" aria-describedby="emailHelp" required>
</div>
<div class="col-md-3">
  <label for="validationCustom01" class="form-label">Apellido</label>
      <input type="text" class="form-control" id="apellidos" name="apellidos" value="" aria-describedby="emailHelp" required>
</div>

  <div class="col-md-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email"  name="email" class="form-control" id="email" aria-describedby="emailHelp">
  </div>

  <div class="col-md-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" name="contraseña" class="form-control" id="contraseña">
  </div>
  
  <div class="col-md-3">
     <div class="form-check form-check-inline" >
        <input class="form-check-input" type="checkbox" id="estado" name="estado" value="1"  >
          <label class="form-check-label" for="inlineCheckbox1">Estado Activo</label>
             </div>
    </div>

  <button type="submit" class="btn btn-primary" name="botonRegistrarse">Registarse</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>