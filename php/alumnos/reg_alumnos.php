<?php
    if (isset($_POST['reg_usu'])) {
        include("../conexion/abrircon.php");

        // Datos para la tabla persona
        $nombre = $_POST['nombre'];
        $ap_pa = $_POST['ap_pa'];
        $ap_ma = $_POST['ap_ma'];
        $curp = $_POST['curp_alumno'];

        // Datos para la tabla alumno
        $especialidad = $_POST['esp_alumno'];
        $turno = $_POST['turno_alumno'];
        $grupo = $_POST['grupo_alumno'];
        $numm_control = $_POST['nocontrol'];

        // Verificar si el CURP ya existe en la tabla persona
        $verify = "SELECT * FROM persona WHERE curp = '$curp'";
        $result = $conectar->query($verify);

        if ($result->num_rows > 0) {
            echo '<script type="text/javascript">
                alert("Este CURP ya existe");
            </script>';
        } else {
            // Insertar en la tabla persona
            $query_persona = "INSERT INTO persona (curp, nombre, ap_pa, ap_ma) 
                              VALUES ('$curp', '$nombre', '$ap_pa', '$ap_ma')";

            if ($conectar->query($query_persona)) {
                // Insertar en la tabla alumno
                $query_alumno = "INSERT INTO alumno (especialidad, turno, grupo, curp, noControl) 
                                 VALUES ('$especialidad', '$turno', '$grupo', '$curp', '$numm_control')";

                if ($conectar->query($query_alumno)) {
                    echo '<script type="text/javascript">
                        alert("¡Te has registrado con éxito!");
                    </script>';
                } else {
                    echo "Hubo un error en el guardado del registro en alumno: " . $conectar->error;
                }
            } else {
                echo "Hubo un error en el guardado del registro en persona: " . $conectar->error;
            }
        }

        include("../conexion/cierracon.php");
    }
    ?>