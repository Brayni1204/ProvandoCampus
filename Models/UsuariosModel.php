<?php
class UsuariosModel extends Query
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUsuario(string $usuario, string $clave, string $perfil)
    {
        if ($perfil == 'estudiante') {
            $sql = "SELECT u.Codigo, u.Contraseña, u.UsuarioId, CONCAT(a.Nombres, ' ', a.Ape_Paterno, ' ', a.Ape_Materno) AS NombreCompleto FROM usuario u INNER JOIN alumnos a ON a.UsuarioId = u.UsuarioId WHERE u.Codigo = '$usuario' AND u.Contraseña = '$clave'";
        } else if ($perfil == 'docente') {
            $sql = "SELECT u.Codigo, u.Contraseña, u.UsuarioId, CONCAT(a.Nombres, ' ', a.Ape_Paterno, ' ', a.Ape_Materno) AS NombreCompleto FROM usuario u INNER JOIN docentes a ON a.UsuarioId = u.UsuarioId WHERE u.Codigo = '$usuario' AND u.Contraseña = '$clave'";
        } else if ($perfil == 'administracion') {
            $sql = "SELECT u.Codigo, u.Contraseña, u.UsuarioId, CONCAT(a.Nombres, ' ', a.Ape_Paterno, ' ', a.Ape_Materno) AS NombreCompleto FROM usuario u INNER JOIN administracion a ON a.UsuarioId = u.UsuarioId WHERE u.Codigo = '$usuario' AND u.Contraseña = '$clave'";
        }
        $data = $this->select($sql);
        return $data;
    }
}
