<?php

class Controller
{
    public $model;
    public $views;

    public function __construct()
    {
        $this->views = new Views();
        $this->CargarModel();
    }

    public function CargarModel()
    {
        $model = get_class($this) . "Model";
        $ruta = "Models/" . $model . ".php";
        if (file_exists($ruta)) {
            require_once $ruta;
            $this->model = new $model();  // Corrected here
        }
    }
}
