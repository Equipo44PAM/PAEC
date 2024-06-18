<?php
include("../../php/conexion/abrirCon.php");

if(isset($_POST['registro'])) {

$curp = $_POST['curp'];
$usuario = $_POST['nombre_user'];
$contrasena = $_POST['contrasena_user'];
$nombre = $_POST['nombre'];

$sql = "INSERT INTO `admin`(`curp`, `usuario`, `pass`, `nombre`) 
VALUES ('$curp','$usuario','$contrasena','$nombre')";
$resultado = mysqli_query($conectar,$sql);
	if($resultado) {
		echo "<script type='text/javascript'>alert('¡Se insertaron los datos correctamente!');</script>";
		header("Location: ../login.html");
	} else {
		echo "¡No se puede insertar la informacion!"."<br>";
	}
}
?>
