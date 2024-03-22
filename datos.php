<?php

$sErr = "";
$sUsuario = "";
$sContrasena = "";
$sFechaNacimiento = "";
$sTelefono = "";

if(isset($_POST["usuario"]) && !empty($_POST["usuario"])) {
    $sUsuario = $_POST["usuario"];
} else {
    $sErr = "Falta el usuario";
}

if(isset($_POST["contrasena"]) && !empty($_POST["contrasena"])) {
    $sContrasena = $_POST["contrasena"];
} else {
    $sErr = "Falta la contraseña";
}

if(isset($_POST["dia"]) && isset($_POST["mes"]) && isset($_POST["anio"]) && 
   !empty($_POST["dia"]) && !empty($_POST["mes"]) && !empty($_POST["anio"])) {
    $sFechaNacimiento = $_POST["dia"] . "/" . $_POST["mes"] . "/" . $_POST["anio"];
} else {
    $sErr = "Falta la fecha de nacimiento";
}

if(isset($_POST["telefono"]) && !empty($_POST["telefono"])) {
    $sTelefono = $_POST["telefono"];
} else {
    $sErr = "Falta el número de teléfono";
}

if($sErr != "") {
    header("Location: error.php?sError=".$sErr);
    exit(); // Termina la ejecución del script después de redireccionar
}

// Si llegamos a este punto, significa que no hay errores
// Podemos realizar cualquier otra acción necesaria aquí, como guardar los datos en una base de datos

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Cuentas en Twitch - Confirmación</title>
</head>
<body>
    <h2>Registro Exitoso</h2>
    <p>Gracias por registrarte en Twitch. A continuación, se muestran los datos que has proporcionado:</p>
    <ul>
        <li><strong>Usuario:</strong> <?php echo $sUsuario; ?></li>
        <li><strong>Contraseña:</strong> <?php echo $sContrasena; ?></li>
        <li><strong>Fecha de Nacimiento:</strong> <?php echo $sFechaNacimiento; ?></li>
        <li><strong>Número de Teléfono:</strong> <?php echo $sTelefono; ?></li>
    </ul>
</body>
</html>
