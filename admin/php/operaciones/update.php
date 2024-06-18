<?php

if (!isset($_SESSION['usuario'])) {
    header("Location: ../../login.html");
    exit;
}

if (isset($_POST['actualizar'])) {
    include("../../../php/conexion/abrirCon.php");

    $tabla = $_POST['tabla'];
    $curp = $_POST['curp'];
    $nombre = $_POST['nombre'];
    $ap_pa = $_POST['ap_pa'];
    $ap_ma = $_POST['ap_ma'];

    // Actualizar datos en la tabla persona
    $persona_update = "UPDATE persona SET nombre='$nombre', ap_pa='$ap_pa', ap_ma='$ap_ma' WHERE curp='$curp'";
    $conectar->query($persona_update);

    // Construir la consulta de actualización para la tabla específica
    switch ($tabla) {
        case 'alumno':
            $noControl = $_POST['noControl'];
            $turno = $_POST['turno'];
            $grupo = $_POST['grupo'];
            $update_query = "UPDATE alumno SET noControl='$noControl', turno='$turno', grupo='$grupo' WHERE curp='$curp'";
            break;
        case 'trabajador':
            $rfc = $_POST['rfc'];
            $cargo = $_POST['cargo'];
            $turno = $_POST['turno'];
            $update_query = "UPDATE trabajador SET rfc='$rfc', cargo='$cargo', turno='$turno' WHERE curp='$curp'";
            break;
        case 'imc':
            $peso = $_POST['peso'];
            $talla = $_POST['talla'];
            $imc = $_POST['imc'];
            $update_query = "UPDATE imc SET peso='$peso', Talla='$talla', imc='$imc' WHERE curp='$curp'";
            break;
        case 'familiar':
            $parentesco = $_POST['parentesco'];
            $id = $_POST['id'];
            $noControl = $_POST['noControl'];
            $update_query = "UPDATE familiar SET parentesco='$parentesco', id='$id', noControl='$noControl' WHERE curp='$curp'";
            break;
    }

    // Ejecutar la consulta de actualización específica
    if ($conectar->query($update_query) === TRUE) {
        echo "<script>alert('¡Los datos se han actualizado correctamente!');</script>";
        // Redireccionamiento a otra página
        echo "<script>window.location.href = 'actualizart.php';</script>";
    } else {
        echo "Error actualizando los datos: " . $conectar->error;
    }

    $conectar->close();
}
?>
