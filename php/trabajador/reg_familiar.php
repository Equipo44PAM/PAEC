<?php
if (isset($_POST['reg_trab'])) {
    include("../conexion/abrircon.php");

    $nombre = $_POST['nombre'];
    $ap_pa = $_POST['ap_pa'];
    $ap_ma = $_POST['ap_ma'];
    $curp = $_POST['curp'];

    $rfc = $_POST['rfc_trab'];
    $cargo = $_POST['cargo_trab'];
    $turno = $_POST['turno_trab'];

    $verify = "SELECT * FROM persona WHERE curp = '$curp'";
    $result = $conectar->query($verify);

    if ($result->num_rows > 0) {
        echo '<script type="text/javascript">
            alert("Este CURP ya existe");
        </script>';
    } else {
        $query_persona = "INSERT INTO persona (curp, nombre, ap_pa, ap_ma) 
                          VALUES ('$curp', '$nombre', '$ap_pa', '$ap_ma')";

        if ($conectar->query($query_persona)) {
            $query_trabajador = "INSERT INTO trabajador (rfc, cargo, turno, curp) 
                                 VALUES ('$rfc', '$cargo', '$turno', '$curp')";

            if ($conectar->query($query_trabajador)) {
                echo '<script type="text/javascript">
                    alert("¡Te has registrado con éxito!");
                    </script>';
            } else {
                echo "Hubo un error en el guardado del registro en trabajador: " . $conectar->error;
            }
        } else {
            echo "Hubo un error en el guardado del registro en persona: " . $conectar->error;
        }
    }

    include("../conexion/cierracon.php");
}
?>
