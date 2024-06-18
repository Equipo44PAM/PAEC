<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/form.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul class="menu">
            <li>
                <a href="#">Registros</a>
                <ul class="menu-after">
                    <li><a href="../familiar/registro.php">Familiar</a></li>
                    <li><a href="../imc/registro.php">IMC</a></li>
                    <li><a href="../alumnos/registro.php">Alumno</a></li>
                    <li><a href="../trabajador/registro.php">Trabajador</a></li>
                    <li><a href="registro.php">Persona</a></li>
                </ul>
            </li>
            <li><a href="../../index.html">Inicio</a></li>
            <li><a href="../../html/calculadora.html">Calculadora</a></li>
            <li><a href="../consulta/consulta.php">Consulta</a></li>
        </ul>
    </nav>
    <h1 class="title-form">Formulario para Persona</h1>
    <div class="form-structure">
    <form  method="post" class="form-estudiantes">
        <img src="../../images/cetis logo.jpg" alt="" class="img-cetis">
        <input type="text"  placeholder="Nombre(s)" name="nombre" id="nombre" required=true >
        <input type="text"  placeholder="Apellido Paterno" name="ap_pa" id="ap_pa" required=true >
        <input type="text"  placeholder="Apellido Materno" name="ap_ma" id="ap_ma" required=true >
        <input type="text"  placeholder="Calle" name="nom_calle" id="nom_calle" required=true >
        <input type="text"  placeholder="Colonia" name="nom_colonia" id="nom_colonia" required=true >
        <input type="text"  name="curp" id="curp" placeholder="CURP" required=true >  
        <input type="submit" name="reg_usu" value="Registrar" class="buttons">
        <input type="reset" name="res_form" value="Borrar" class="buttons" >
    </form>
    </div>
    <?php
        include("reg_personas.php");
        ?>
</body>
</html>