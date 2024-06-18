<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados de la consulta</title>
</head>
<body>
    <header>Resultados de la consulta:</header>
    <?php
    // Inicializar variables por defecto
    $telefono = '';
    $parentesco = '';
    $noControl = '';
    $CURP = '';

    if (isset($_POST['curp']) && isset($_POST['tabla'])) {
        include("../../conexion/abrirCon.php");
        $CURP = $_POST['curp'];
        $tabla = $_POST['tabla'];

        // Realizar la consulta
        $resultado = mysqli_query($conectar, "SELECT * FROM $tabla WHERE curp = '$CURP'");
        if ($consulta = mysqli_fetch_array($resultado)) {
            if ($tabla == 'familiar') {
                $telefono = $consulta['id'];  // Asegúrate de que este campo existe en tu tabla
                $parentesco = $consulta['parentesco'];
                $noControl = $consulta['noControl'];  // Asegúrate de que este campo existe en tu tabla
            } elseif ($tabla == 'imc') {
                // Define los campos correspondientes para la tabla IMC
            } elseif ($tabla == 'alumnos') {
                // Define los campos correspondientes para la tabla Alumno
            } elseif ($tabla == 'trabajador') {
                // Define los campos correspondientes para la tabla Trabajador
            } elseif ($tabla == 'persona') {
                // Define los campos correspondientes para la tabla Persona
            }
            $CURP = $consulta['curp'];
        } else {
            echo "No se encontraron datos para la CURP proporcionada.";
        }

        include("../../conexion/cierraCon.php");
    } else {
        echo "Error al cargar datos. El formulario no se ha enviado.";
    }
    ?>
    <form>
        Teléfono:<input type="text" value="<?php echo $telefono; ?>" readonly><br><br>
        Parentesco: <input type="text" value="<?php echo $parentesco; ?>" readonly><br><br>
        Número de Control: <input type="text" value="<?php echo $noControl; ?>" readonly><br><br>
        CURP: <input type="text" value="<?php echo $CURP; ?>" readonly><br><br>
    </form>
    <input type="button" value="Inicio" onclick="location.href='../../HTML/Estados/indice.html'">
</body>
</html>
