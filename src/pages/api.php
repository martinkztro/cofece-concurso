<?php
    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type");
    
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
    
        // Realizar consulta a la base de datos
        $result = mysqli_query($db, "SELECT id, dg FROM denuncias;");
    
        // Verificar si hay resultados
        if ($result) {
            // Obtener resultados como un array asociativo
            $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
            // Devolver datos en formato JSON
            echo json_encode($data);
        } else {
            throw new Exception("Error en la consulta: " . mysqli_error($db));
        }
    
        // Cerrar la conexión
        mysqli_close($db);
    
    } catch (Exception $e) {
        // Log del error o redirigir a una página de error
        die("Error: " . $e->getMessage());
    }
    
?>