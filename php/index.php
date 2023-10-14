<?php
    require 'funciones.php';
    $eventos = obtener_eventos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="hero">
        <div class="hero__bienvenida">
            <p>Bienvenido(a) al</p>
            <h1>Panel de Concentraciones</h1>
        </div>

    </section>

    <main>
        <section id="secc-reservaciones" class="reservaciones">
            <div class="reservaciones__container">
                <h2>Concentraciones</h2>
                <ul class="lista__eventos">
                        <li>
                        <div class="lista__titulo evento">
                                <h3>EXPEDIENTE</h3>
                                <p>ARTICULO LFCE</p>
                                <p>INGRESO</p>
                                <p>RESOLUCIÓN</p>
                                <p>SENTIDO DE RESOLUCIÓN</p>
                                <figure class="btn-crear">
                                </figure>
                            </div>
                        </li>
                        <?php
                            
                            while($evento = mysqli_fetch_assoc($eventos)){ 
                                $id = $evento['expediente'];
                                ?>                            
                        <li class="lista__evento">
                            <div class="card evento">
                                <h3><?php echo $evento['expediente']; ?></h3>
                                <p><?php echo $evento['articulo_LFCE']; ?></p>
                                <p><?php echo $evento['ingreso']; ?></p>
                                <p><?php echo $evento['resolucion']; ?></p>
                                <p><?php echo $evento['sentido_resolucion']; ?></p>
                            </div>
                        </li>
                            <?php } ?>
                    </ul>
                
            </div>
        </section>
    </main>


</body>
</html>
