<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/menu.css">
    <link rel="stylesheet" href="../../css/form.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
    <h1 class="title-form">Formulario para IMC</h1>
    <div class="form-structure">
        <form  method="post" class="form-estudiantes">
           <img src="../../images/cetis logo.jpg" alt="" class="img-cetis">
        <input type="text" placeholder="Nombre(s)" name="nombre" id="nombre" required>
        <input type="text" placeholder="Apellido Paterno" name="ap_pa" id="ap_pa" required>
        <input type="text" placeholder="Apellido Materno" name="ap_ma" id="ap_ma" required>
        <input type="text"  placeholder="Folio" name="folio" id="folio" required=true >
        <input type="text"  placeholder="Peso" name="peso_imc" id="peso_imc" required=true >
        <input type="text"  placeholder="Talla" name="talla_imc" id="talla_imc" required=true >
        <input type="text"  placeholder="IMC" name="imc" id="imc" required=true >
        <input type="text"  name="curp" id="curp" placeholder="CURP" required=true >  
        <input type="submit" name="reg_imc" value="Registrar" class="buttons">
        <input type="reset" name="res_form" value="Borrar" class="buttons" >
    
        </form>
    </div>

</body>
</html>
