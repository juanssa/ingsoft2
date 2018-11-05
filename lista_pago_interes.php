<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LISTA PAGO INTERES</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="estilos_empleados.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <script src="js/jquery.min.js"></script>
    <script src="buscar_pago_interes.js"></script>

       <?php  require_once('php/iniciar_sesion.php');?>

  </head>

  <body>

    <header class="container">
      <div class="row">
        <h1 class="font-weight-bold text-left col-md-12 mt-5 title">LISTA PAGO INTERES <i class="far fa-address-card icon-color"></i></h1>
         <?php include('navfixed.php');?>
            <?php
      $position=$_SESSION['SESSION_USUARIO'];
      if($position=='ADMIN') {
?> 
      </div>
    </header>

    <div class="container my-5">
      <nav class="menu nav nav-pills flex-column flex-sm-row">
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="lista_pago_interes.php">Lista de Pago Interes <i class="far fa-list-alt"></i></a></li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="inicio.php">Menú principal <i class="fab fa-pagelines icono"></i></a> </li>

      </nav>
    </div>
<?php 
}else{
  ?>
  <div class="container my-5">
      <nav class="menu nav nav-pills flex-column flex-sm-row">
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="lista_tipo_inversion.php">Lista de Pago Interes <i class="far fa-list-alt"></i></a></li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="ejecutivo.php">Menú principal <i class="fab fa-pagelines icono"></i></a> </li>

      </nav>
    </div>

    <?php
}
?>

<div class="container">
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text buscar-span" id="basic-addon1">Buscar</span>
    </div>
    <input type="text" name="consulta" id="caja_busqueda" class="form-control" placeholder="Ingresa el rfc del cliente" aria-label="Username" aria-describedby="basic-addon1">
  </div>
</div>

<div class="container mt-5">
  <div class="table-responsive" id="datos">

  </div>
</div>


  </body>
</html>
