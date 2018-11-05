<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>EMPLEADOS</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/vendor/fontawesome/css/all.css">
    <link rel="stylesheet" href="estilos.css">
    <!-- <link rel="stylesheet" href="estilos_empleados.css"> -->

        <?php  require_once('php/iniciar_sesion.php');?>
  </head>

  <body>

    <header class="container">
      <div class="row">
        <h1 class="font-weight-bold text-left col-md-12 mt-5 title">Empleados <i class="far fa-address-card icon-color"></i></h1>
        <?php include('navfixed.php');?>
    <?php
      $position=$_SESSION['SESSION_USUARIO'];
      if($position=='admin' || $position=='ejecutivo') {
?>
      </div>
    </header>
    <?php
}
?>
    <div class="container my-5">
      <nav class="menu nav nav-pills flex-column flex-sm-row">

        <a class="flex-md-fill text-sm-center nav-link col-md-4 active-color" href="menuempleados.php">Agregar empleado <i class="fas fa-user-plus"></i></a> </li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="lista_empleados.php">Lista de empleados <i class="far fa-list-alt"></i></a></li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="inicio.php">Menú principal <i class="fab fa-pagelines icono"></i></a> </li>

      </nav>
    </div>

    <div class="container pb-5">
      <div class="row">
        <form class="col-sm-12 col-md-6 offset-md-3 p-4 " action="php/agregar_empleados.php" method="POST" class="col-sm-12 col-md-6 offset-md-3 p-4">
          <h2 class="tname">Datos del Empleado</h2>
            <div class="form-group">
              <label for="nss">NSS</label>
              <input type="text" class="form-control" id="nss" name="nss" placeholder="NSS" required>
            </div>
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
            </div>
            <div class="form-group">
              <label for="direccion">Dirección</label>
              <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección" required>
            </div>
            <div class="form-group">
              <label for="telefono">Teléfono</label>
              <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required>
            </div>
             <div class="form-group">
              <label for="puesto">Puesto</label>
              <input type="tel" class="form-control" id="puesto" name="puesto" placeholder="Puesto" required>
            </div>
            <div class="form-group">
              <label for="user">User</label>
              <input type="tel" class="form-control" id="user" name="user" placeholder="User">
            </div>
            <div class="form-group">
              <label for="pass">Password</label>
              <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
            </div>
            <button type="submit" class="btn submit-button float-right" name="guardar" value="guardar">Guardar</button>
        </form>
      </div>
    </div>


  </body>
</html>
