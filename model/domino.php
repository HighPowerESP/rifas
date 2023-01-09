<?php

class Domino {
    public $titulo;
    public $fichaMasAlta;

    function __construct($titulo, $masAlta)
    {
        $this->titulo = ($titulo);
        $this->fichaMasAlta = $masAlta;
    }

    public function __toString()
    {
        return "Numero mas alto de ficha: " . $this->fichaMasAlta;
    }

}