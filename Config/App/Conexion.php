<?php
class Conexion
{
    private $conect;

    public function __construct()
    {
        $pdo = "mysql:host=" . host . ";dbname=" . db_sis . ";.charset.";
        try {
            $this->conect = new PDO($pdo, user, pass);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error en la conexión" . $e->getMessage();
        }
    }
    public function conet()
    {
        return $this->conect;
    }
}
