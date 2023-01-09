<?php
include('view/header.php');
include('view/navBar_2.php');
?>

<div class="container">

<br>
<h1>Crear rifa</h1>
<br>

    <form action="" method="post" class="mx-auto">
        <div class="row mb-3">
            <label for="titulo" class="col-sm-2 col-form-label">Titulo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="min" class="col-sm-2 col-form-label">Primer ticket</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="min" name="min" min="0" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="max" class="col-sm-2 col-form-label">Ultimo ticket</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="max" name="max" min="0" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>

</div>

<?php
include('view/footer.php');
?>