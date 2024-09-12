<?php include "header.php"?>

<h1>¡C o n t i n u a m o s!</h1>
<p>Por favor, necesitamos más datos para continuar con su proceso de alta:</p>
<!--Formulario-->
<form action="lectura2.php" method="post">
    <!--Nombre-->
    <p>
        <label for="nombre"></label>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre">

    <!--Primer Apellido-->

        <label for="apellido1"></label>
        <input type="text" id="apellido1" name="apellido1" placeholder="PRIMER APELLIDO">
    </p>
    <!--Edad-->
    <p>
        <label for="edad"></label>
        <input type="number" id="edad" name="edad" placeholder="EDAD">

    <!--Segundo Apellido-->

        <label for="apellido2"></label>
        <input type="text" id="apellido2" name="apellido2" placeholder="SEGUNDO APELLIDO">
    </p>
    <!--BOTONES-->
    <input type="submit" value="Siguiente" >
    <input type="submit" value="Limpiar">
</form>

<?php
    if (isset($_GET["cadena"])){
        $errores = $_GET["cadena"];
        echo $errores;
    }
?>
</body>
</html>