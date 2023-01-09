<?php
include('view/header.php');
include('view/navBar_2.php');
?>

<div class="container">

<br>
<h1>Crear dominó</h1>
<br>


    <form action="" method="post">

        <div class="row mb-3">
            <label for="titulo" class="col-sm-2 col-form-label">Titulo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="max" class="col-sm-2 col-form-label">Ficha mas alta</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="max" name="max" required min="0">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>

    </form>

</div>

<?php
include('view/footer.php');
