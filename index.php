<?php include "header.php"?>

<div class="container-principal">

<div class="container2">
    <div class="centrado">
        <p style="font-size: 40px">1 <span class="material-symbols-outlined">arrow_forward</span> 2 <span class="material-symbols-outlined">arrow_forward</span> 3</p>
    </div>
</div>

<div class="container1">
    <h1>¡C o m e n c e m o s!</h1>
    <p>Por favor, necesitamos estos datos para iniciar su proceso de alta:</p>
<!--Formulario-->

    <form action="lectura1.php" method="post" novalidate>
<!--DNI-->
        <p>
            <label for="dni"></label>
            <input type="text" id="dni" name="dni" placeholder="DNI">

<!--Teléfono-->

            <label for="telefono"></label>
            <input type="text" id="telefono" name="telefono" placeholder="TELÉFONO MÓVIL">
        </p>
<!--EMAIL-->
        <p>
            <label for="email"></label>
            <input type="email" id="email" name="email" placeholder="EMAIL">

<!--CONFIRMAR CORREO-->
            <label for="email2"></label>
            <input type="email" id="email2" name="email2" placeholder="CONFIRMA TU EMAIL">
        </p>
<!--POLITICA DE PRIVACIDAD-->
        <p>
            <input type="checkbox" id="check">He leído y entiendo la <a href="">política de protección de datos de carácter personal</a>
        </p>
<!--BOTONES-->
        <input type="submit" value="Siguiente" id="enviar" disabled class="boton">
        <input type="submit" value="Limpiar" class="boton">
    </form>
    </div>
</div>
<?php
    if (isset($_GET["cadena"])){
        $errores = $_GET["cadena"];
        echo $errores;
    }
?>

</body>
</html>