<?php
$servername = "localhost";
$username = "root";
$password = "Jazziel1218*";
$dbname = "excel";

try {
    // Crear una conexión DB
    $db = mysqli_connect($servername, $username, $password, $dbname);
    // Verificar conexión
    if (!$db) {
        throw new Exception("Error de conexión: " . mysqli_connect_error());
    }

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
