<?php
session_start();
// primero comprobamos que los campos no estén vacíos
if (!empty($_POST["dni"]) && !empty($_POST["telefono"]) && !empty($_POST["email"]) && !empty($_POST["email2"])) {
    // declaramos las variables
    $dni = $_POST["dni"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $email2 = $_POST["email2"];
    // declaramos un array donde almacenaremos los posibles errores
    $errores= array();

    // validamos el dni
    if (!preg_match("/^[0-9]{8}[A-Z]{1}$/", $dni)) {
        $errores[]="<p style='text-align: center'>El formato del DNI no es válido</p>";
    }
    // validamos el telefono
    if (!preg_match("/^(?:(?:\+|00)?34)?[679]\d{8}$/", $telefono)) {
        $errores[]="<p style='text-align: center'>El telefono deber ser en formato 000 000 000</p>";
    }
    // validamos el email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[]="<p style='text-align: center'>El email no es válido";
    }
    // validamos que los emails coinciden
    if ($email != $email2) {
        $errores[]= "<p style='text-align: center'>Los emails no coinciden</p>";
    }
} else {
    // si los campos estan vacios, mandamos un error
    $errores[]= "<p style='text-align: center'>Todos los campos son requeridos</p>";
}

// comprobamos que no haya errores
if (count($errores) > 0) {
    for ($x = 0; $x < count($errores); $x++) {
        $cadena .= $errores[$x];
        // si hay errores los mandamos al index por el método get
    }
    header("Location: index.php?cadena=".$cadena);
} else {
    // si no hay errores, redirigimos al index 2
    header("Location: index2.php");
}


