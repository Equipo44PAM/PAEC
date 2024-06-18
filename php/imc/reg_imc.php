<?php
if(isset($_POST['reg_imc'])){
    include("../conexion/abrircon.php");
    $folio = $_POST['folio'];
    $peso = $_POST['peso_imc'];
    $talla = $_POST['talla_imc'];
    $imc = $_POST['imc'];
    $curp = $_POST['curp'];
    $verify = "SELECT * FROM persona WHERE curp = '$curp'"; 
    
    $result = $conectar->query($verify);
    
    $query = "INSERT INTO `imc`(`folio`, `peso`, `talla`, `imc`, `curp`)
    VALUES ('$folio','$peso','$talla','$imc','$curp')";
    
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


