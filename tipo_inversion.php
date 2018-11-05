<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TIPO INVERSION</title>
    <!-- <link rel="stylesheet" href="estilos_clientes.css"> -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/vendor/fontawesome/css/all.css">
    <link rel="stylesheet" href="estilos.css">

          <?php  require_once('php/iniciar_sesion.php');?>

  </head>

  <body>

    <header class="container">
      <div class="row">
        <h1 class="font-weight-bold text-left col-md-12 mt-5 title">Tipo Inversion <i class="fas fa-users icon-color"></i></h1>
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

        <a class="flex-md-fill text-sm-center nav-link col-md-4 active-color" href="tipo_inversion.php">Agregar Tipo Inversion <i class="fas fa-user-plus"></i></a> </li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="lista_tipo_inversion.php">Lista de Tipo de Inversion <i class="far fa-list-alt"></i></a></li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="inicio.php">Menú principal <i class="fab fa-pagelines icono"></i></a> </li>

      </nav>
    </div>

    <?php
}else {
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

    <div class="container pb-5">
      <div class="row">

        <form method="POST" action="php/agregar_tipo_inversion.php" class="col-sm-12 col-md-6 offset-md-3 p-4 ">
          <h2 class="tname">Datos del Tipo de Inversion</h2>
            <div class="form-group">
              <label for="id">ID</label>
              <input type="text" class="form-control" id="id" name="id" placeholder="Id">
            </div>
            <div class="form-group">
              <label for="nombre">Categoria</label>
              <input type="text" class="form-control" id="rfc" name="categoria" placeholder="Nombre">
            </div>
            <div class="form-group">
              <label for="direccion">Rendimiento</label>
              <input type="text" class="form-control" id="rendimiento" name="porcentaje" placeholder="Rendimiento ">
            </div>
            <div class="form-group">
              <label for="telefono">Tasa de Pago</label>
              <input type="tel" class="form-control" id="tasa_de_pago" name="tasa_pago" placeholder="Tasa Pago">
            </div>
          <button type="submit" class="btn submit-button float-right" name="guardar" value="guardar">Guardar</button>
        </form>

      </div>
    </div>

  </body>
</html>
