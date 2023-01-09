<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
<a class="navbar-brand" href="/">Sorteos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/index.php/listado">Lista</a>
      </li>
      <li class="nav-item active">
        <a href="/index.php/crearRifa" class="nav-link">Crear rifa</a>
      </li>
      <?php
      if($_SESSION['level'] == 2){
      ?>
      <li class="nav-item active">
        <a href="/index.php/crearDomino" class="nav-link">Crear domino</a>
      </li>
      <?php
      }
      ?>
      </ul>
      <ul class="navbar-nav ms-auto">
      <li class="nav-item active">
        <a class="nav-link"><?=$_SESSION['username']?></a>
      </li>
      <li class="nav-item active">
        <a href="/index.php/logout" class="nav-link btn btn-danger pull-right">Cerrar sesion</a>
      </li>
    </ul>
  </div>
  </div>  
</nav>