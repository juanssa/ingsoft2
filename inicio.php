<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>INVERSIONES</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <!-- <script src="main.js"></script> -->

    <?php  require_once('php/iniciar_sesion.php');?>
  </head>
  <body>
    
    <header class="container">
      <div class="row ">
        <h1 class="font-weight-bold text-center col-md-12 mt-5 title">Inversiones <i class="fab fa-pagelines icono"></i></h1>
 
        <a href="php/cerrar_sesion.php" class="btn btn-primary btn-lg"><i class="fas fa-power-off salir"></i></a>
                <?php include('navfixed.php');?>
    <?php
      $position=$_SESSION['SESSION_USUARIO'];
      if($position='admin') {
?> 
      </div>
    </header>

    <div class="container mt-4 d-none d-md-block">
      <div class="row">
          <img src="images/principal-img.jpg" class="mx-auto d-block" alt="Imagen Principal">
      </div>
    </div>


    <div class="container my-5">
      <nav class="nav nav-pills flex-column flex-sm-row">
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="graficas.php"><i class="fab fa-pagelines icono">Graficas</i></a> </li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="tipo_inversion.php">Tipo de inversiones <i class="fas fa-columns"></i></a> </li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="clientes.php">Clientes <i class="fas fa-users"></i></a></li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="inversion.php">Inversión <i class="fas fa-coins"></i></a> </li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="lista_pago_interes.php">Pago de intereses <i class="fas fa-money-bill"></i></a> </li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="menuempleados.php">Empleados <i class="far fa-address-card"></i></a> </li>
      </ul>
    </div>
    <?php
}
?>
  </body>
</html>
