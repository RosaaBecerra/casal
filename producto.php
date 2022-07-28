<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname= "nadamejor";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// consulta SQL

$sql='SELECT* FROM tienda';
$resultado= $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    
<header>
<nav class="navbar navbar-expand-sm navbar-dark bg-primary" aria-label="Third navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="./">NADA MEJOR</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
          <li class="nav-item">
          </li>
          <li class="nav-item">
            <a class="nav-link" href="producto.php">Añadir producto</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Catálogo</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Niños</a></li>
              <li><a class="dropdown-item" href="#">Bebes</a></li>
              <li><a class="dropdown-item" href="#">Accesorios</a></li>
            </ul>
          </li>
        </ul>
        <form role="search">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>

</header>

<hr class="my-4">

<div class="container">
  <main>
  <div class="row g-8 justify-content-xl-center">
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Producto</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-12">
              <label for="firstName" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Talla</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="" placeholder="" required>
             
              </div>
            </div>

            <div class="col-12">
              <label for="" class="form-label">Descripción <span class="text-muted"></span></label>
              <input type="" class="form-control" id="" placeholder="">
              
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Precio</label>
              <input type="text" class="form-control" id="address" placeholder="" required>
            </div>
          
            <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Añadir producto </button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2022 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>