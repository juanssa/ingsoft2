<?php
require 'conexion.php';
$conexion = conecta();

session_start();

$errmsg_arr = array();

$errflag = false;


if (isset($_POST['iniciarSesion'])) {
	# code...

	$user = mysqli_real_escape_string($conexion,$_POST['user']);
	$pass = mysqli_real_escape_string($conexion,$_POST['pass']);



		if($user == ''){
			$errmsg_arr[]='User missing';
			$errflag = true;
		}
		if ($pass == '') {
			$errmsg_arr[]='Pass missing';
			$errflag = true;
		}

/*if ($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: index.php");
	exit();
}
*/




$admin = "SELECT * FROM EMPLEADOS WHERE user = '$user' and pass = '$pass'and puesto = 'ADMIN'";
$ejecutivo = "SELECT * FROM EMPLEADOS WHERE user = '$user' and pass = '$pass'and puesto = 'EJECUTIVO'";


$resultado = mysqli_query($conexion, $admin);
$filas = mysqli_num_rows($resultado);

$res = mysqli_query($conexion, $ejecutivo);
$filasEjecutivo = mysqli_num_rows($res);



if($resultado){
	if($filas > 0 ){
    
    	session_regenerate_id();
		$member = mysqli_fetch_assoc($resultado);
		
		$_SESSION['SESSION_ID'] = $member['nss'];
     	$_SESSION['SESSION_USUARIO'] = $member['puesto'];

     	session_write_close();
        header("Location: ../inicio.php");

    exit();
}else if ($filasEjecutivo > 0) {

		session_regenerate_id();
		$member = mysqli_fetch_assoc($res);
		
		$_SESSION['SESSION_ID'] = $member['nss'];
     	$_SESSION['SESSION_USUARIO'] = $member['puesto'];

     	session_write_close();    
    	header("Location: ../ejecutivo.php");
    	
    exit();
}else {
    echo "Error en la autenticacion... intente de nuevo <br><a href='../index.php'> regresar</a>";

}
}else{

	die("consulta fallo...");
}

}

?>
