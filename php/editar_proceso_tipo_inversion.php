<?php 
require 'conexion.php';
$conexion = conecta();

$id=$_REQUEST['id'];

$ID = $_POST['id_tipo_inv'];
$categoria = $_POST['categoria'];
$porcentaje = $_POST['porcentaje'];
$tasa_pago = $_POST['tasa_pago'];



$consulta="UPDATE tipo_inversion SET id_tipo_inv='$ID', categoria='$categoria', porcentaje='$porcentaje', tasa_pago='$tasa_pago' WHERE id_tipo_inv='$id'";
if (mysqli_query($conexion, $consulta)) {
      header("Location: ../lista_tipo_inversion.php");
} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
 ?>