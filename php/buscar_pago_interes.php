<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">

</head>

</html>
<?php
require 'conexion.php';
$conexion = conecta();

$salida = "";
$query = "SELECT * FROM pago_interes ORDER BY id_inversion DESC ";

if(isset($_POST['consulta'])){
	$q = $conexion->real_escape_string($_POST['consulta']);
	$query = "SELECT id_inversion, fecha_reg, importe, rfc_cliente, nss_empleado, categoria FROM pago_interes WHERE id_inversion LIKE '%".$q."%' OR fecha_reg LIKE  '%".$q."%' OR importe LIKE '%".$q."%' OR rfc_cliente LIKE  '%".$q."%' OR nss_empleado LIKE  '%".$q."%' OR categoria LIKE  '%".$q."%'" ;
}

$resultado = $conexion->query($query);

if($resultado->num_rows > 0){
	$salida.="<table class='tabla_datos table'>
				<caption align=top>Listado de Pagos</caption>
				<thead>
				<tr>
				<th>id</th>
				<th>fecha registro</th>
				<th>rendimiento</th>
				<th>nss empleado</th>
				<th>rfc cliente</th>
				<th>categoria</th>
				<th>acciones</th>
				</tr>
				</thead>
				<tbody>";

		while ($fila = $resultado->fetch_assoc()) {
			$salida.="<tr>
					  <td>".$fila['id_inversion']."</td>
					  <td>".$fila['fecha_reg']."</td>
					  <td>".$fila['importe']."</td>
					  <td>".$fila['nss_empleado']."</td>
					  <td>".$fila['rfc_cliente']."</td>
					  <td>".$fila['categoria']."</td>
					  <td>"."<i class='fas fa-pen-alt'>"."<a href='php/editar_inversion.php?id=".$fila['id_inversion']."'>editar</a></i> <i class='fas fa-trash'>"."<a href='php/eliminar_proceso_inversion.php?id=".$fila['id_inversion']."'>eliminar</a></i>"."</td>
					  </tr>";
		}

	$salida.="</tbody></thead>";

} else {

	$salida.="No hay datos :(";

}

echo $salida;

$conexion->close()

?>
