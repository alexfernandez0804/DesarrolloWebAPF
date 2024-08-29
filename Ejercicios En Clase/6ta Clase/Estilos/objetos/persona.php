<?php
class persona{
    public $nombre;
    public $edad;
    public $altura;
    public $sexo;
    public function _construct($nombre, $edad, $altura, $sexo)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->altura = $altura;
        $this->sexo = $sexo;
    }
}