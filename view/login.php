<?php
include('view/header.php');
include('view/navBar_1.php');


?>

<div class="container">
<br>
<h1>Panel de login</h1>

<br>

<?php
    if(isset( $_SERVER['PATH_INFO'])){
      $partes = explode('/', $_SERVER['PATH_INFO']);
      if(isset($partes[2])){  
        print('
          <div class="alert alert-danger" role="alert">
            Usuario o contraseña incorrecta!
          </div>
        ');
      }
    }
  ?>
  <br>

<form action="" method="post">

<div class="row mb-3">
    <label for="username" class="col-sm-2 col-form-label">Usuario</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" name="username" required>
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pass" name="pass" required>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Iniciar sesion</button>



</form>

</div>
<?php
include('view/footer.php');

?>