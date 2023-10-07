<?php
    include 'funciones.php';
    $eventos = obtener_eventos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PAGE</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <nav class="header__container">
    	    <div class="header__cuenta">
                <img class="cuenta__imagen" src="/adminpage/images/foto__perfil.png" alt="">
                <p class="cuenta__bienvenida">Administrador</p>
            </div>

            <figure class="header__logo">
                <h2>Fielder<span>Community</span></h2>
            </figure>

        </nav>
    </header>

    <section class="hero">
        <div class="hero__bienvenida">
            <p>Bienvenido(a) al</p>
            <h1>Panel de Administración</h1>
        </div>

    </section>

    <main>
        <section id="secc-reservaciones" class="reservaciones">
            <div class="reservaciones__container">
                <h2>Denuncias</h2>
                <ul class="lista__eventos">
                        <li>
                        <div class="lista__titulo evento">
                                <h3>Expediente</h3>
                                <p>Ingreso</p>
                                <p>Fin</p>
                                <p>Resultado</p>
                                <p>Dg</p>
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
                                <p><?php echo $evento['ingreso']; ?></p>
                                <p><?php echo $evento['fin']; ?></p>
                                <p><?php echo $evento['resultado']; ?></p>
                                <p><?php echo $evento['dg']; ?></p>
                            </div>
                        </li>
                            <?php } ?>
                    </ul>
                
            </div>
        </section>
    </main>


</body>
</html>