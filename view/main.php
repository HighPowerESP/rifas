<?php
include('view/header.php');
include('view/navBar_2.php');
?>

<div class="container">

<br>
<h1>Gestion de sorteos</h1>
<h2>Bienvendio, <?= $_SESSION['username'] ?></h2>
<p>Disfrutas del siguiente nivel de acceso: <?= $_SESSION['level'] ?></p>

</div>

<?php
include('view/footer.php');
?>