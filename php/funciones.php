<?php
    function obtener_eventos() {
        try {
            
             include 'db.php';
    
            $sql = "SELECT id,expediente, ingreso, fin, resultado,dg from denuncias;";
    
            $consulta = mysqli_query($db, $sql);
    
            return $consulta;
    
            mysqli_close($db);
    
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }
    obtener_eventos();
   

?>