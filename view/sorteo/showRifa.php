<?php
include('view/header.php');
include('view/navBar_2.php');

$rifa = $_SESSION['sorteos'][$id];

?>

<div class="container">
    <br>
    <h1>Rifa: <?=$rifa->titulo?></h1>
    <br>
    <?php

    

    $min = $rifa->primerTicket;
    $max = $rifa->ultimoTicket;

    if ($min > $max) {
        $min = $rifa->ultimoTicket;
        $max = $rifa->primerTicket;
    }

    for ($i = $min; $i <= $max; $i++) {
        print("
        
        <div class='card rifa'>
            <div class='card-body'>
                <h5 class='card-title'>$rifa->titulo</h5>
                <hr>
                <p class='rifaBody'>Rifa numero: $i</p>
            </div>
        </div>"


        );
    }



    ?>


</div>




<?php
include('view/footer.php');
?>