<?php
class Estudiantes extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }

    public function index()
    {
        // Asegúrate de que haya una vista llamada Views/Estudiantes/Index.php
        $this->views->getView($this, "Index");
    }
}
