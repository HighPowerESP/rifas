<?php


require_once('controller/UserController.php');
require_once('controller/SorteoController.php');

$SorteoController = new SorteoController();
$UserController = new UserController();


session_start();

if(isset( $_SERVER['PATH_INFO'])){
    $partes = explode('/', $_SERVER['PATH_INFO']);
    if($partes[1]=='login'){
        if(!isset($_POST['username'])){
            $UserController->showLogin();
        }
        else{
            $UserController->loginProcess($_POST['username'], $_POST['pass']);
        }
    }
    
    if($partes[1] == 'logout'){
        $UserController->logoutProcedure();
    }

    if($partes[1] == "listado"){
        $SorteoController->showListado();
    }

    if($partes[1] == "crearRifa"){
        if(!isset($_POST['titulo'])){
            $SorteoController->formRifa();
        }else{
            $SorteoController->createRifa($_POST['titulo'],$_POST['min'],$_POST['max']);
        }
    }

    if($partes[1] == "crearDomino"){
        if(!isset($_POST['titulo'])){
            $SorteoController->formDomino();
        }else{
            $SorteoController->createDomino($_POST['titulo'],$_POST['max']);
        }
    }

    if($partes[1] == "delete" && is_numeric($partes[2])){
        $SorteoController->deleteProcedure($partes[2]);
    }

    if($partes[1] == "imprimir" && is_numeric($partes[2])){
        $SorteoController->imprimir($partes[2]);
    }

}

else if(isset($_SESSION['username'])){
    $UserController->showMain();
}

else{
    $UserController->showDefault();
}