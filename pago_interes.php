<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PAGO DE INTERES</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <!-- <link rel="stylesheet" href="estilos_empleados.css"> -->
      <?php  require_once('php/iniciar_sesion.php');?>
  </head>

  <body>

    <header class="container">
      <div class="row">
        <h1 class="font-weight-bold text-left col-md-12 mt-5 title">PAGO INTERES <i class="far fa-address-card icon-color"></i></h1>
        <?php include('navfixed.php');?>
    <?php

      $position=$_SESSION['SESSION_USUARIO'];
      $nss=$_SESSION['SESSION_ID'];
      if($position=='ADMIN') {
?> 
      </div>
    </header>

    <div class="container my-5">
      <nav class="menu nav nav-pills flex-column flex-sm-row">
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="lista_pago_interes.php">Lista de Pagos de Intereses <i class="far fa-list-alt"></i></a></li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="inicio.php">Menú principal <i class="fab fa-pagelines icono"></i></a> </li>

      </nav>
    </div>

    <?php 
}else{
  ?>
  <div class="container my-5">
      <nav class="menu nav nav-pills flex-column flex-sm-row">
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="lista_inversion.php">Lista de Pagos de Intereses <i class="far fa-list-alt"></i></a></li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="ejecutivo.php">Menú principal <i class="fab fa-pagelines icono"></i></a> </li>

      </nav>
    </div>
    <?php
}
?>




  </body>
</html>

