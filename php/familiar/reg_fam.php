<?php
    if (isset($_POST['reg_fam'])) {
        include("../conexion/abrircon.php");

        $nombre = $_POST['nombre'];
        $ap_pa = $_POST['ap_pa'];
        $ap_ma = $_POST['ap_ma'];
        $curp = $_POST['curp_fam'];

        $parentesco = $_POST['parentesco_fam'];
        $telefono = $_POST['telefono_fam'];
        $numControl = $_POST['nocontrol'];

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
                $query_familiar = "INSERT INTO familiar (parentesco, id, curp, noControl) 
                                   VALUES ('$parentesco', '$telefono', '$curp', '$numControl')";

                if ($conectar->query($query_familiar)) {
                    echo '<script type="text/javascript">
                        alert("¡Te has registrado con éxito!");
                    </script>';
                } else {
                    echo "Hubo un error en el guardado del registro en familiar: " . $conectar->error;
                }
            } else {
                echo "Hubo un error en el guardado del registro en persona: " . $conectar->error;
            }
        }

        include("../conexion/cierracon.php");
    }
    ?>