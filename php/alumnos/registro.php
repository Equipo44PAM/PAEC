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
                    <li><a href="../trabajador/registro.php">Trabajador</a></li>
                    <li><a href="../alumnos/registro.php">Alumno</a></li>
                    <li><a href="../familiar/registro.php">Familiar</a></li>
                    <li><a href="../imc/registro.php">IMC</a></li>
                </ul>
            </li>
            <li><a href="../../index.html">Inicio</a></li>
            <li><a href="../../html/calculadora.html">Calculadora</a></li>
            <li><a href="../consulta/consultar.php">Consultas</a></li>
        </ul>
    </nav>
    <h1 class="title-form">Formulario para Alumnos</h1>
    <div class="form-structure">
        <form method="post" class="form-estudiantes">
            <img src="../../images/cetis logo.jpg" alt="" class="img-cetis">
            <input type="text" placeholder="Nombre(s)" name="nombre" id="nombre" required>
            <input type="text" placeholder="Apellido Paterno" name="ap_pa" id="ap_pa" required>
            <input type="text" placeholder="Apellido Materno" name="ap_ma" id="ap_ma" required>
            <select name="turno_alumno" id="turno_alumno" class="opc" required>
                <option value="" disabled selected>Selecciona tu turno</option>
                <option value="Matutino">Matutino</option>
                <option value="Vespertino">Vespertino</option>
            </select>
            <select name="esp_alumno" id="esp_alumno" class="opc" required>
                <option value="" disabled selected>Selecciona tu especialidad</option>
                <option value="Trabajo_Social">Trabajo Social</option>
                <option value="Programacion">Programación</option>
                <option value="Mecanica_Industrial">Mecanica Industrial</option>
                <option value="Construccion">Construcción</option>
            </select>
            <input type="text" placeholder="Grupo" name="grupo_alumno" id="grupo_alumno" required>
            <input type="text" placeholder="No.Control" name="nocontrol" id="nocontrol" required>
            <input type="text" placeholder="CURP" name="curp_alumno" id="curp_alumno" required>
            <input type="submit" name="reg_usu" value="Registrar" class="buttons">
            <input type="reset" name="res_form" value="Borrar" class="buttons">
        </form>
    </div>
    <?php
        include("reg_alumnos.php");
        ?>
</body>
</html>