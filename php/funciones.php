<?php
    function obtener_eventos() {
        try {
            
            require 'db.php';
            $sql = "select expediente, articulo_LFCE, ingreso, resolucion, sentido_resolucion
            from concentraciones;";
    
            $consulta = mysqli_query($db, $sql);
            return $consulta;
            
            //mysqli_close($db);

        } catch (\Throwable $th) {
            var_dump($th);
        }
    }
    obtener_eventos();
   

?>