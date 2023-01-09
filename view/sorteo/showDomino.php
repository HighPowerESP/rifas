<?php
include('view/header.php');
include('view/navBar_2.php');
?>

<div class="container">
    <br>
    <h1>Domino</h1>
    <br>
    <?php

    $domino = $_SESSION['sorteos'][$id];

    for ($i = 0; $i <= $domino->fichaMasAlta; $i++) {

        for ($j = 0; $j <= $i; $j++) {
            print("
        
        <div class='card rifa'>
            <div class='card-body'>
                
                
                <p class='rifaBody'>$i</p>
                <hr>
                <p class='rifaBody' style='-webkit-transform: rotate(-180deg);'>$j</p>
            </div>
        </div>"


            );
        }
    }



    ?>


</div>




<?php
include('view/footer.php');
?>