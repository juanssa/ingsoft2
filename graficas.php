<?php 
 require_once('php/iniciar_sesion.php');

$conexion = conecta();

$consulta = "SELECT * FROM inversion GROUP BY categoria";
$resultado = mysqli_query($conexion, $consulta);

$consultados = "SELECT * FROM pago_interes GROUP BY rfc_cliente";
$resultadodos = mysqli_query($conexion, $consultados);
 ?>


<html>
<head>
	<title>Graficas</title>

	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <script src="js/jquery.min.js"></script>

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
		
		google.charts.load('current', {'packages':['corechart']});

		google.charts.setOnLoadCallback(grafica);

		google.charts.setOnLoadCallback(pagoInteres);

		function grafica(){

			//crea la grafica
			var data = new google.visualization.DataTable();
			data.addColumn('string','categoria');
			data.addColumn('number','importe');
			data.addRows([
				<?php 
					$i = 0;
					$n = mysqli_num_rows($resultado);
					while ($fila=mysqli_fetch_assoc($resultado)) {
						print"['".$fila["categoria"]."', ".$fila["importe"]."]";
						$i++;
						if($i < $n) print ",";
					}
				 ?>
			]);

			var options =  {'title':'Inversiones agrupadas por categoria',
							 'is3D': true,
							 'width': 500,
							 'height': 300};

			var chart = new google.visualization.PieChart(document.getElementById('grafica'));
			chart.draw(data, options);
		}

		function pagoInteres(){

			//crea la grafica
			var data = new google.visualization.DataTable();
			data.addColumn('string','rfc_cliente');
			data.addColumn('number','importe');
			data.addRows([
				<?php 
					$i = 0;
					$n = mysqli_num_rows($resultadodos);
					while ($fila=mysqli_fetch_assoc($resultadodos)) {
						print"['".$fila["rfc_cliente"]."', ".$fila["importe"]."]";
						$i++;
						if($i < $n) print ",";
					}
				 ?>
			]);

			var options =  {'title':'Pago de Interes agrupadas por Cliente',
							 'is3D': true,
							 'width': 500,
							 'height': 300};

			var chart = new google.visualization.PieChart(document.getElementById('pagoInteres'));
			chart.draw(data, options);
		}


	</script>

	<style type="text/css">
		#grafica{
			
			border: 2px solid gray;

		}

		#pagoInteres{
			
			border: 2px solid gray;

		}

		h1{
			text-align: center;
		}
	</style>


</head>
<body>

	<header class="contenedor container">
      <div class="row">
        <h1 class="font-weight-bold text-left col-md-12 mt-5 title">GRAFICAS <i class="fas fa-users icon-color"></i></h1>
        <?php include('navfixed.php');?>
    <?php
      $position=$_SESSION['SESSION_USUARIO'];
      if($position=='ADMIN')
?> 
      </div>
    </header>
    <div class="container my-5">
      <nav class="menu nav nav-pills flex-column flex-sm-row">
        <a class="flex-md-fill text-sm-center nav-link col-md-4 active-color" href="graficas.php">Lista de Graficas <i class="far fa-list-alt"></i></a></li>
        <a class="flex-md-fill text-sm-center nav-link col-md-4 nav-act" href="inicio.php">Menu principal <i class="fab fa-pagelines icono"></i></a> </li>

      </nav>
    </div>



	<div id="grafica"></div>
	<div id="pagoInteres"></div>

</body>
</html>