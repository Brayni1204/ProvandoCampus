<?php
$nombre = $_SESSION["nombre_completo"];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modulo de administrador</title>

    <link rel="icon" href="<?php echo base_url; ?>Assets/Image/LogoPrincipal.png" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo base_url; ?>Assets/CSS/StyleAdmin.css">
    <script src="https://kit.fontawesome.com/b8af4aed8b.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="body--contenido">

        <?php include('./Views/templatess/Menuadm.php') ?>

        <div class="main-content">
            <div class="conten--general">
                <header>
                    <div class="school-info">
                        <img src="<?php echo base_url; ?>Assets/Image/LogoPrincipal.png" alt="Logo Colegio">
                        <div class="conten--datos">
                            <div class="conten--abrebiaturas">
                                <h1>TRM</h1>
                            </div>
                            <div class="Barra--separacion">
                                .
                            </div>
                            <div class="conten--nombre-colegio">
                                <p>COLEGIO <br> AGROPECUARIO TORIBIO RODRÍGUEZ <br> DE MENDOZA - BAGUA</p>
                            </div>
                        </div>
                        <div class="conten--campus">
                            CAMPUS <br> ESTUDIANTIL
                        </div>
                    </div>

                </header>
                <div class="user-info">
                    <span>Administrador: <?php echo $nombre ?></span>
                    <button class="logout-button">Cerrar sesión</button>
                </div>
            </div>

            <section class="schedule">

            </section>
        </div>

    </div>
</body>

</html>