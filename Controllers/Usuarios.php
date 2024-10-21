<?php
class Usuarios extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }

    public function validar()
    {
        if (empty($_POST['usuario']) || empty($_POST['clave']) || empty($_POST['perfil'])) {
            $msg = "Los campos están vacíos";
        } else {
            $usuario = $_POST['usuario'];
            $clave = $_POST['clave'];
            $perfil = $_POST['perfil'];

            $data = $this->model->getUsuario($usuario, $clave, $perfil);
            if ($data) {
                $_SESSION['id_usuario'] = $data["UsuarioId"];
                $_SESSION['codigo'] = $data["Codigo"];
                $_SESSION['perfil'] = $perfil;
                $_SESSION['nombre_completo'] = $data["NombreCompleto"]; // Guardar el nombre completo en la sesión

                // Redirigir según el perfil
                if ($perfil == 'docente') {
                    $msg = "docente"; // Redirigir al controlador de docentes
                } elseif ($perfil == 'estudiante') {
                    $msg = "estudiante"; // Redirigir al controlador de estudiantes
                } elseif ($perfil == 'administracion') {
                    $msg = "administracion"; // Redirigir al controlador de administración
                }
            } else {
                $msg = "Verifica tus datos de acceso";
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
}
