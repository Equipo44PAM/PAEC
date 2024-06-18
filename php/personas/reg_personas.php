<?php
if(isset($_POST['reg_usu'])){
    include("../conexion/abrircon.php");
    $nombre = $_POST['nombre'];
    $ap_paterno = $_POST['ap_pa'];
    $ap_materno = $_POST['ap_ma'];
    $curp = $_POST['curp'];
    $calle = $_POST['nom_calle'];
    $colonia = $_POST['nom_colonia'];
    $verify = "SELECT * FROM persona WHERE curp = '$curp'"; 
    
    $result = $conectar->query($verify);
    
    $query = "INSERT INTO `persona`(`nombre`, `ap_pa`, `ap_ma`, `calle`, `colonia`, `curp`) 
    VALUES ('$nombre','$ap_paterno','$ap_materno','$calle','$colonia','$curp')";
    
    if($conectar->query($query)){  
        echo '<script type="text/javascript">
        alert("¡Te has registrado con exito!");
        </script>';

    }elseif($result->num_rows > 0){
        echo '<script type="text/javascript">
            alert("Este CURP ya existe");
        </script>';
    }
    else {
        echo "Hubo un error en el guardado del registro: " . $conectar->error;
    }
    
    include("../conexion/cierracon.php");
}
?>

<script>
setTimeout(() => {
    let mensajeElemento = document.getElementById("mensaje");
    mensajeElemento.style.display = "none";
}, 3000);
</script>


