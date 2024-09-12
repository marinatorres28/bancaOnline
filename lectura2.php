<?php
session_start();
// validamos que los campos no estén vacíos
if (!empty($_POST["nombre"]) && !empty($_POST["apellido1"]) && !empty($_POST["apellido2"]) && !empty($_POST["edad"])) {
    // variables
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $edad = $_POST["edad"];
    // array de errores
    $errores2=array();

    // validamos el nombre
    if (!is_string($nombre) || preg_match("/[0-9]/",$nombre)){
        $errores2[]="<p style='text-align: center'>El nombre no debe tener numeros</p>";
        }
    // validamos el primer apellido
    if (!is_string($apellido) || preg_match("/[0-9]/",$apellido)){
        $errores2[]="<p style='text-align: center'>El apellido no debe tener numeros</p>";
    }
    // validamos el segundo apellido
    if (!is_string($apellido2) || preg_match("/[0-9]/",$apellido2)){
        $errores2[]="<p style='text-align: center'>El apellido no debe tener numeros</p>";
    }
    // validamos la edad
    if ($edad < 18){
        $errores2[]="<p style='text-align: center'>Tienes que ser mayor de 18 para darte de alta";
    }

} else {
    // si los campos están vacios, mandamos un error
    $errores2[]="<p style='text-align: center'>Todos los campos son requeridos</p>";
}

// comprobamos que no haya errores
if (count($errores2) > 0) {
    for ($x = 0; $x < count($errores2); $x++) {
        $cadena .= $errores2[$x];
        // si hay errores los mandamos al index2 por el método get
    }
    header("Location: index2.php?cadena=".$cadena);
} else {
    // si no hay errores, redirigimos a la pagina de confirmacion
    header("Location: confirmacion.php");
}

