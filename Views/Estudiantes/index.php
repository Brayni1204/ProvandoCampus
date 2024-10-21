<?php
$nombre = $_SESSION["nombre_completo"];
$perfil = $_SESSION["perfil"];

if (!isset($_SESSION["codigo"]) || empty($_SESSION["codigo"])) {
    header("Location: " . base_url . "404.html");
    exit;
}
if ($perfil != 'estudiante') {
    header("Location: " . base_url . "404.html");
}

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_destroy();
    header("Location: " . base_url . "index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modulo de Estudiantes</title>

    <link rel="icon" href="<?php echo base_url; ?>Assets/Image/LogoPrincipal.png" type="image/x-icon">

    <!-- Referencias de Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@800&display=swap" rel="stylesheet">

    <!-- Hoja de estilos personalizada -->


    <script src="https://kit.fontawesome.com/b8af4aed8b.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="body--contenido">

        <?php include('./Views/templatess/NavEstudiantes.php') ?>

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
                    <span>Estudiante: <?php echo $nombre ?></span>
                    <a href="?action=logout">Cerrar sesión</a>
                </div>
            </div>
            <section class="schedule">


            </section>
        </div>
    </div>
</body>
<link rel="stylesheet" href="<?php echo base_url; ?>Assets/CSS/StyleEstudiantes.css">

</html>