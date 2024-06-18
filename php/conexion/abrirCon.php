<?php
$host = "localhost";
$basededatos = "id22209606_registro";
$usuario = "root";
$contraseña = "";

$conectar = new mysqli($host,$usuario,$contraseña,$basededatos);

if($conectar -> connect_errno){
echo "Nuestro sitio experimenta fallos...";
exit();
} 
?>

