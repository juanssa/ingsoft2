<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>INVERSIONES</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="estilos_empleados.css">
    <link rel="stylesheet" href="css/vendor/fontawesome/css/all.css">

    <script src="js/jquery.min.js"></script>
    <script src="buscar_inversiones.js"></script>

       <?php  require_once('php/iniciar_sesion.php');?>

  </head>

  <body>

    <header class="container">
      <div class="row">
        <h1 class="font-weight-bold text-left col-md-12 mt-5 title">INVERSIONES <i class="far fa-address-card icon-color"></i></h1>
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

        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="inversion.php">Agregar Inversion <i class="fas fa-user-plus"></i></a> </li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 active-color" href="lista_inversion.php">Lista de Inversiones <i class="far fa-list-alt"></i></a></li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="inicio.php">Menú principal <i class="fab fa-pagelines icono"></i></a> </li>

      </nav>
    </div>
<?php
}else{
  ?>
  <div class="container my-5">
      <nav class="menu nav nav-pills flex-column flex-sm-row">

        <a class="flex-md-fill text-sm-center nav-link col-md-4 active-color" href="tipo_inversion.php">Agregar Tipo Inversion <i class="fas fa-user-plus"></i></a> </li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="lista_tipo_inversion.php">Lista de Tipo de Inversion <i class="far fa-list-alt"></i></a></li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="ejecutivo.php">Menú principal <i class="fab fa-pagelines icono"></i></a> </li>

      </nav>
    </div>

    <?php
}
?>

<!-- <div class="contenedor">
  <div class="form center">
    <form action="" method="post" name="search_form" id="search_form">
      <input type="text" name="consulta" id="caja_busqueda">
    </form>
  </div>
</div> -->

<div class="container">
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text buscar-span" id="basic-addon1">Buscar</span>
    </div>
    <input type="text" name="consulta" id="caja_busqueda" class="form-control" placeholder="Ingresa cualquier dato de la inversion" aria-label="Username" aria-describedby="basic-addon1">
  </div>
</div>

<div class="container mt-5">
  <div class="table-responsive" id="datos">

  </div>
</div>
 <!-- <div id="consultar">
    <section class="widget">
        <h4 class="widgettitulo">Listado de Empleados</h4>
        <div class="datagrid" id="datos">

        </div>
    </section>
    </div> -->

  </body>
</html>
