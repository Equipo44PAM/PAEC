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
    <h1 class="title-form">Formulario para Trabajador</h1>
    <div class="form-structure">
    <form method="post" class="form-estudiantes">
            <img src="../../images/cetis logo.jpg" alt="" class="img-cetis">
            <input type="text" placeholder="Nombre(s)" name="nombre" id="nombre" required>
            <input type="text" placeholder="Apellido Paterno" name="ap_pa" id="ap_pa" required>
            <input type="text" placeholder="Apellido Materno" name="ap_ma" id="ap_ma" required>
            <input type="text" placeholder="RFC" name="rfc_trab" id="rfc_trab" required>
            <input type="text" placeholder="Cargo" name="cargo_trab" id="cargo_trab" required>
            <input type="text" placeholder="Turno" name="turno_trab" id="turno_trab" required>
            <input type="text" name="curp" id="curp" placeholder="CURP" required>
            <input type="submit" name="reg_trab" value="Registrar" class="buttons">
            <input type="reset" name="res_form" value="Borrar" class="buttons">
        </form>
    </div>
    <?php
        include("reg_familiar.php");
        ?>
</body>
</html>