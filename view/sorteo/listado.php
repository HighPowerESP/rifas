<?php
include('view/header.php');
include('view/navBar_2.php');
?>

<div class="container">
<br>
<h1>Listado</h1>
<br>

<?php

    if(count($_SESSION['sorteos']) != 0){
        print ("<ol class='list-unstyled'>");
        foreach($_SESSION['sorteos'] as $key => $sorteo){
            print("
            <li class='card mb-3'>
            <div class='card-body d-flex justify-content-between align-items-center'>
              <div>
                <h5 class='card-title'>$sorteo->titulo</h5>
                <p class='card-text'>$sorteo</p>
              </div>
              <div>
                <a href='/index.php/imprimir/$key' class='btn btn-primary mr-2'>Imprimir</a>
                <a href='/index.php/delete/$key' class='btn btn-danger ml-auto'>Eliminar</a>
              </div>
            </div>
          </li>
            ");

        }
        print ("</ol>");
    }else{
        print ("<h3>No existen sorteos</h3>");
    }

?>

</div>

<?php
include('view/footer.php');
?>