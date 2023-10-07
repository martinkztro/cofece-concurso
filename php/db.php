<?php
    $servername = "localhost";
    $username = "root";
    $password = "Jazziel1218*";
    $dbname = "excel";

    // Crear una conexión DB
    $db = mysqli_connect($servername, $username, $password, $dbname);

    // Verificar conexión
    if (!$db) {
        die("Error de conexión: " . $db);
        exit;
    }
?>
