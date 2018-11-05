<?php 
//require 'conexion.php';
require 'iniciar_sesion.php';
$conexion = conecta();

/*$rfcCliente = $_POST['rfcCliente'];*/
$rfcCliente = $_POST['RFC'];
$fecha = $_POST['fecha'];
$dias = $_POST['dias'];
$importe = $_POST['importe'];
$categoria = $_POST['categoria'];


$nss = "SELECT nss FROM empleados where nss = '$_SESSION[SESSION_ID]'";
$res=mysqli_query($conexion, $nss);
$resultados = mysqli_fetch_array($res);
$return = $resultados['nss']; 

$consulta="INSERT INTO inversion (fecha_reg, dias, importe, nss_empleado, RFC_cliente, categoria)VALUES('$fecha', '$dias', '$importe','$return', '$rfcCliente','$categoria')";
if (mysqli_query($conexion, $consulta)) {
      header("Location: ../lista_inversion.php");
} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
 ?>