<?php 
require 'conexion.php';
$conexion = conecta();

$id=$_REQUEST['RFC'];

$rfc = $_POST['rfc'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];



$consulta="UPDATE clientes SET rfc='$rfc', nombre='$nombre', direccion='$direccion', telefono='$telefono' WHERE rfc='$id'";
if (mysqli_query($conexion, $consulta)) {
      header("Location: ../lista_cliente.php");
} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
 ?>