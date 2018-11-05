<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>INVERSIONES</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/vendor/fontawesome/css/all.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <!-- <script src="main.js"></script> -->

    <?php  require_once('php/iniciar_sesion.php');?>
  </head>
  <body>
    <header class="container pt-3">
      <div class="row">

        <a href="php/cerrar_sesion.php" class="col-sm-3 offset-sm-9 btn btn-sesion">Cerrar sesión <i class="fas fa-power-off salir"></i></a>
                       <?php include('navfixed.php');?>
    <?php
      $position=$_SESSION['SESSION_USUARIO'];
      if($position='ejecutivo') {
?>

    </div>
    </header>
    <div class="container">
      <div class="row">
        <h1 class="font-weight-bold text-center col-md-12 mt-5 title">Inversiones <i class="fab fa-pagelines icono"></i></h1>
      </div>
    </div>

    <div class="container mt-4 d-none d-md-block">
      <div class="row">
      	<img src="images/principal-img.jpg" class="mx-auto d-block" alt="Imagen Principal">
      </div>
    </div>



    <div class="container my-5">
      <nav class="nav nav-pills flex-column flex-sm-row">
       <!--  <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="#"><i class="fab fa-pagelines icono"></i></a> </li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="tipo_inversion.php">Tipo de inversiones <i class="fas fa-columns"></i></a> </li> -->
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="clientes.php">Clientes <i class="fas fa-users"></i></a></li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="inversion.php">Inversión <i class="fas fa-coins"></i></a> </li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="lista_pago_interes.php">Pago de intereses <i class="fas fa-money-bill"></i></a> </li>
      </ul>
    </div>
<?php
}
?>
  </body>
</html>
