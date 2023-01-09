<?php


class Rifas {
    public $titulo;
    public $primerTicket;
    public $ultimoTicket;

    function __construct($titulo, $primerTicket, $ultimoTicket)
    {
        $this->titulo = ($titulo);
        $this->primerTicket = $primerTicket;
        $this->ultimoTicket = $ultimoTicket;
    }

    public function __toString()
    {
        return "Comienza en el numero " . $this->primerTicket . " y acaba en el " . $this->ultimoTicket;
    }

}