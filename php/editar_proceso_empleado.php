<?php 
require 'conexion.php';
$conexion = conecta();

$nss=$_REQUEST['nss'];

$NSS = $_POST['nss'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$puesto = $_POST['puesto'];
$user = $_POST['user'];
$pass = $_POST['pass'];



$consulta="UPDATE empleados SET nss='$NSS', nombre='$nombre', direccion='$direccion', telefono='$telefono', puesto='$puesto', user='$user', pass='$pass' WHERE nss='$nss'";
if (mysqli_query($conexion, $consulta)) {
      header("Location: ../lista_empleados.php");
} else {
      echo "Error: " . $consulta . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
 ?>