<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo base_url; ?>Assets/Image/LogoTRM.png" type="image/x-icon">
    <title>Login Campus Estudiantil-TRM</title>
    <link rel="stylesheet" href="<?php echo base_url ?>Assets/CSS/StyleLogin.css">
    <script src="https://kit.fontawesome.com/b8af4aed8b.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="content--body">
        <div class="container-login">
            <div class="container-presentacion-login">
                <h3>!Te damos la bienvenida!</h3>
                <div class="container-img-logo">
                    <img src="<?php echo base_url ?>Assets/Image/LogoTRM.png" alt="">
                </div>
            </div>
            <div class="container-info-login">
                <div class="container-form-login">
                    <div class="container-header-title">
                        <div><span>T</span></div>
                        <div><span>R</span></div>
                        <div><span>M</span></div>
                    </div>
                    <div class="container-header-proyect">
                        <SPan>CAMPUS</SPan>
                        <br>
                        <span>ESTUDIANTIL</span>
                    </div>
                    <form id="frmLogin" method="post">
                        <div class="group-form">
                            <label for="usuario">USUARIO</label>
                            <div class="container-input">
                                <input type="text" name="usuario" id="usuario">
                                <span class="icon-input"><i class="fa-regular fa-user"></i></span>
                            </div>
                        </div>
                        <div class="group-form">
                            <label for="clave">CONTRASEÑA</label>
                            <div class="container-input">
                                <input type="password" name="clave" id="clave">
                                <span class="icon-input"><i class="fa-solid fa-eye-slash"></i></span>
                            </div>
                        </div>
                        <div class="group-form">
                            <label for="perfil">PERFIL</label>
                            <select name="perfil" id="perfil" required>
                                <option value="">Seleccione un perfil</option>
                                <option value="estudiante">Estudiante</option>
                                <option value="docente">Docente</option>
                                <option value="administracion">Administrador</option>
                            </select>
                        </div>
                        <div class="alert alert-danger text-center d-none" id="alerta" role="alert">
                        </div>
                        <input type="submit" onclick="frmLogin(event)" name="btn-login" value="Iniciar Sesión">
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

<script>
    const base_url = "<?php echo base_url; ?>";
</script>
<script src="<?php echo base_url; ?>Assets/JS/funciones.js"></script>

</html>