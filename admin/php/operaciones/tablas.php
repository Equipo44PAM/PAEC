<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: ../../login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/tablas.css">
    <title>Modificar</title>
</head>

<body>
    <?php
    if (isset($_POST['consultar'])) {
        include("../../../php/conexion/abrirCon.php");

        $curp = $_POST['curp'];

        // Consulta para obtener los datos de la tabla persona
        $persona_query = "SELECT nombre, ap_pa, ap_ma FROM persona WHERE curp = '$curp'";
        $persona_result = $conectar->query($persona_query);

        if ($persona_result->num_rows > 0) {
            $persona_data = $persona_result->fetch_assoc();
            $nombre = $persona_data['nombre'];
            $ap_pa = $persona_data['ap_pa'];
            $ap_ma = $persona_data['ap_ma'];
        } else {
            echo "<h2>El CURP ingresado no está registrado en la tabla persona</h2>";
            $nombre = $ap_pa = $ap_ma = "N/A";
        }

        $queries = [
            "SELECT 'alumno' AS tabla, curp, noControl, turno, grupo FROM alumno WHERE curp = '$curp'",
            "SELECT 'trabajador' AS tabla, curp, rfc, cargo, turno FROM trabajador WHERE curp = '$curp'",
            "SELECT 'imc' AS tabla, curp, peso, Talla, imc FROM imc WHERE curp = '$curp'",
            "SELECT 'familiar' AS tabla, curp, parentesco , id, noControl FROM familiar WHERE curp = '$curp'"
        ];

        $datos_encontrados = false;
        foreach ($queries as $query) {
            $result = $conectar->query($query);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $datos_encontrados = true;
                    echo "<h2>Datos del " . $row['tabla'] . ":</h2><br>";
                    echo "<form method='post' action=''>";
                    echo "<input type='hidden' name='tabla' value='" . $row['tabla'] . "'>";
                    echo "<input type='hidden' name='curp' value='" . $row['curp'] . "'>";
                    echo "CURP: " . $row['curp'] . "<br>";
                    echo "<label for='nombre'>Nombre:</label>";
                    echo "<input type='text' name='nombre' value='" . $nombre . "'>";
                    echo "<label for='ap_pa'>Apellido Paterno:</label>";
                    echo "<input type='text' name='ap_pa' value='" . $ap_pa . "'>";
                    echo "<label for='ap_ma'>Apellido Materno:</label>";
                    echo "<input type='text' name='ap_ma' value='" . $ap_ma . "'>";
                    
                    switch ($row['tabla']) {
                        case 'alumno':
                            echo "<label for='noControl'>No Control:</label>";
                            echo "<input type='text' name='noControl' value='" . $row['noControl'] . "'>";
                            echo "<label for='turno'>Turno:</label>";
                            echo "<input type='text' name='turno' value='" . $row['turno'] . "'>";
                            echo "<label for='grupo'>Grupo:</label>";
                            echo "<input type='text' name='grupo' value='" . $row['grupo'] . "'>";
                            break;
                        case 'trabajador':
                            echo "<label for='rfc'>RFC:</label>";
                            echo "<input type='text' name='rfc' value='" . $row['rfc'] . "'>";
                            echo "<label for='cargo'>Cargo:</label>";
                            echo "<input type='text' name='cargo' value='" . $row['cargo'] . "'>";
                            echo "<label for='turno'>Turno:</label>";
                            echo "<input type='text' name='turno' value='" . $row['turno'] . "'>";
                            break;
                        case 'imc':
                            echo "<label for='peso'>Peso:</label>";
                            echo "<input type='text' name='peso' value='" . $row['peso'] . "'>";
                            echo "<label for='talla'>Talla:</label>";
                            echo "<input type='text' name='talla' value='" . $row['Talla'] . "'>";
                            echo "<label for='imc'>IMC:</label>";
                            echo "<input type='text' name='imc' value='" . $row['imc'] . "'>";
                            break;
                        case 'familiar':
                            echo "<label for='parentesco'>Parentesco:</label>";
                            echo "<input type='text' name='parentesco' value='" . $row['parentesco'] . "'>";
                            echo "<label for='id'>Teléfono:</label>";
                            echo "<input type='text' name='id' value='" . $row['id'] . "'>";
                            echo "<label for='noControl'>No.Control del estudiante:</label>";
                            echo "<input type='text' name='noControl' value='" . $row['noControl'] . "'>";
                            break;
                    }
                    echo "<button type='submit' name='actualizar'>Actualizar</button>";
                    echo "<a href='actualizart.php'>Regresar</a>";
                    echo "</form>";
                }
            }
        }

        if (!$datos_encontrados) {
            echo "<h2>Este CURP todavía no se registra en las tablas alumno, trabajador, imc, o familiar</h2>";
        }

        $conectar->close();
    }
    include("update.php");
    ?>

    <style>
        a{
            margin-left: 70px;
        }
    </style>
</body>
</html>
