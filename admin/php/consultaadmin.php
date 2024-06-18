<?php

if (!isset($_SESSION['usuario'])) {
    header("Location: ../../login.html");
    exit;
}

elseif (isset($_POST['consult'])) {
    
    include("../php/conexion/abrirCon.php");

    $curp = $_POST['curp'];
    //a cada consulta se le da un nombre o etiqeta que en este caso esn 'tabla' para saber de que tabla se encontraron los datos
    //Select alumno AS tabla, a tabla le da el valo de alumno a 'tabla' por eso abajo ya se sabe el nombre de la tabla que proviene
    $queries = [
        "SELECT 'alumno' AS tabla, curp, noControl, turno, grupo FROM alumno WHERE curp = '$curp'",
        "SELECT 'trabajador' AS tabla, curp, rfc, cargo, turno FROM trabajador WHERE curp = '$curp'",
        "SELECT 'imc' AS tabla, curp, peso, Talla, imc FROM imc WHERE curp = '$curp'",
        "SELECT 'familiar' AS tabla, curp, parentesco , id, noControl FROM familiar WHERE curp = '$curp'"
    ];
    //Hcer las consultas para cada tabla tomando los datos que hay dentro de ellas
    $datos_encontrados = false;
    //para ver si no hay un curp en una tabla
    foreach ($queries as $query) {
        $result = $conectar->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                //ya encontro los datos entonces se hace verdadera 
                $datos_encontrados = true;
                echo "<h2>Datos del " . $row['tabla'] . ":" . "</h2>" . "<br>";
                echo "CURP: " . $row['curp'] . "<br>";

                switch ($row['tabla']) {
                    case 'alumno':
                        echo "No Control: " . $row['noControl'] . "<br>";
                        echo "Turno: " . $row['turno'] . "<br>";
                        echo "Grupo: " . $row['grupo'] . "<br>";
                        break;
                    case 'trabajador':
                        echo "RFC: " . $row['rfc'] . "<br>";
                        echo "Cargo: " . $row['cargo'] . "<br>";
                        echo "Turno: " . $row['turno'] . "<br>";
                        break;
                    case 'imc':
                        echo "Peso: " . $row['peso'] . "<br>";
                        echo "Talla: " . $row['Talla'] . "<br>";
                        echo "IMC: " . $row['imc'] . "<br>";
                        break;
                    case 'familiar':
                        echo "Parentesco: " . $row['parentesco'] . "<br>";
                        echo "Telefono: " . $row['id'] . "<br>";
                        echo "No.Control del estudiante: " . $row['noControl'] . "<br>";
                        break;
                }
                echo "<br>";
            }
        }
    }
    //No encontro ningun curp en la tabla
    if (!$datos_encontrados) {
            echo "<h2>Este curp todavía no se registra </h2>";
    }

    $conectar->close();
}
?>
