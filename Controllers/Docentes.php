<?php
class Docentes extends Controller
{
    public function __construct()
    {
        session_start();
        parent::__construct();
    }

    public function index()
    {
        // Asegúrate de que haya una vista llamada Views/Docentes/Index.php
        $this->views->getView($this, "Index");
    }
}
