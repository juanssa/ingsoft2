<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CLIENTES</title>
    <!-- <link rel="stylesheet" href="estilos_clientes.css"> -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/vendor/fontawesome/css/all.css">
    <link rel="stylesheet" href="estilos.css">

    <?php  require_once('php/iniciar_sesion.php');?>

  </head>

  <body>

    <header class="container">
      <div class="row">
        <h1 class="font-weight-bold text-left col-md-12 mt-5 title">Clientes <i class="fas fa-users icon-color"></i></h1>
        <?php include('navfixed.php');?>
    <?php
      $position=$_SESSION['SESSION_USUARIO'];
<<<<<<< HEAD
      if($position='admin') {
?>
=======
      if($position=='ADMIN') {
?> 
>>>>>>> 584c2fd206630890382750a00f71396e8c0f7513
      </div>
    </header>

    <div class="container my-5">
      <nav class="menu nav nav-pills flex-column flex-sm-row">

        <a class="flex-md-fill text-sm-center nav-link col-md-4 active-color" href="clientes.php">Agregar cliente <i class="fas fa-user-plus"></i></a> </li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="lista_cliente.php">Lista de clientes <i class="far fa-list-alt"></i></a></li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="inicio.php">Menú principal <i class="fab fa-pagelines icono"></i></a> </li>

      </nav>
    </div>

<<<<<<< HEAD
    <?php
}else{
=======
    <?php 
}else {
>>>>>>> 584c2fd206630890382750a00f71396e8c0f7513
  ?>
  <div class="container my-5">
      <nav class="menu nav nav-pills flex-column flex-sm-row">

        <a class="flex-md-fill text-sm-center nav-link col-md-4 active-color" href="clientes.php">Agregar Clientes <i class="fas fa-user-plus"></i></a> </li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="lista_cliente.php">Lista de clientes <i class="far fa-list-alt"></i></a></li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="ejecutivo.php">Menú principal <i class="fab fa-pagelines icono"></i></a> </li>

      </nav>
    </div>

    <?php
}
?>

    <div class="container pb-5">
      <div class="row">

        <form method="POST" action="php/agregar_clientes.php" class="col-sm-12 col-md-6 offset-md-3 p-4 ">
          <h2 class="tname">Datos del Cliente</h2>
            <div class="form-group">
              <label for="rfc">RFC</label>
              <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC" required>
            </div>
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="rfc" name="nombre" placeholder="Nombre" required>
            </div>
            <div class="form-group">
              <label for="direccion">Direccion</label>
              <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
            </div>
            <div class="form-group">
              <label for="telefono">Telefono</label>
              <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required>
            </div>
          <button type="submit" class="btn submit-button float-right" name="guardar" value="guardar">Guardar</button>
        </form>

      </div>
    </div>

  </body>
</html>
