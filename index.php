<?php

  require_once __DIR__ . '/start/routes.php';

  $routes = getRoutes();

  $views = $_GET['s'] ??'home';

  if(!isset($routes[$views])) {
    $views = '404';
  }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums - <?= $routes[$views]['title'] ?> </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
<nav class="navbar navbar-expand-lg py-4 mb-5">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="img/logo.png" alt="Albums"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi-filter-right"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav ms-auto">
        <li><a class="nav-link noBt" aria-current="page" href="index.php?s=home">Home</a></li>
        <li><a class="nav-link noBt" href="index.php?s=products">Productos</a></li>
        <li class="contactoBtLi"><a class="nav-link contactoBt" href="index.php?s=contact">Contacto</a></li>
      </ul>
    </div>
  </div>
</nav>
    
<?php

  require 'sections/' . $views . '.php';

?>

<footer class="container mt-5">
    <div class="mx-auto elFooter py-5">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <p>Albums <?php echo date("Y")?> - Derechos reservados.</p>
            </div>
            <div class="col-sm-12 col-md-6 alCostado">
                    <p>Hecho con ♥ por Valentín Cipriano</p>
            </div>
        </div>
    </div>
</footer>

    <script src="js/bootstrap.js"></script>
</body>
</html>