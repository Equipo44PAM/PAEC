<?php
include("../../php/conexion/abrirCon.php");
session_start();
if(isset($_POST['login'])) {

$usuario = $_POST['nombre_user'];
$contrasena = $_POST['contrasena_user'];

$sql = "SELECT * FROM admin WHERE usuario = '$usuario' and pass = '$contrasena'";
$resultado = mysqli_query($conectar,$sql);
$numero_registros = mysqli_num_rows($resultado);
	if($numero_registros != 0) {
		$_SESSION['usuario'] = $usuario;
		header("Location: ../administrar.php");
    	exit;
	} else {
		echo "Credenciales inválidas. Por favor, verifica tu nombre de usuario y/o contraseña."."<br>";
	}
}
?>
