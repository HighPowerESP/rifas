<?php
require_once("model/rifas.php");
require_once("model/domino.php");



class SorteoController{
    public $sorteos;


    public function __construct()
    {
        $this->sorteos = isset($_SESSION['sorteos']) ? $_SESSION['sorteos'] : []; 
    }

    public function showListado(){
        require("view/sorteo/listado.php");
    }

    public function formRifa(){
        require("view/sorteo/crearRifa.php");
    }

    public function createRifa($titulo, $min, $max){
        array_push($_SESSION['sorteos'],new Rifas($titulo,$min,$max));
        header("Location: /index.php/listado");
    }

    public function deleteProcedure($id){
        array_splice($_SESSION['sorteos'], $id, 1);
        header("Location: /index.php/listado");
    }

    public function imprimir($id){
        if($_SESSION['sorteos'][$id] instanceof Rifas){
            require("view/sorteo/showRifa.php");
        }else{ 
            require("view/sorteo/showDomino.php");
        }
    }

    public function formDomino(){
        require("view/sorteo/crearDomino.php");
    }

    public function createDomino($title, $max){
        array_push($_SESSION['sorteos'],new Domino($title,$max,));
        header("Location: /index.php/listado");
    }

}