
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <title>TechInfo - Acceuil</title>
</head>
<header>
<?php
include "header.php";
?>
</header>
        
<body>
    <h1>Bienvenue chez TechInfo</h1>


	<a href="reparations.php">	<div class="card col-5 mb-3">
  <img href="reparations.php" src="../techinfo/reparation.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 href="reparations.php" class="card-title">Réparations</h5>
    <p class="card-text">Découvrez nos prestations de reparations de votre PC, Mac, smartphone...</p>

  </div></a>
</div>
<div class="card col-5 mb-3">
<img src="../techinfo/pc.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Montage PC</h5>
    <p class="card-text">Nous montons vos PC avec nos pièces ou les vôtres </p>

  </div>

</div>
<div class="card col-5 mb-3">
<img src="../techinfo/produit.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Nos produits</h5>
    <p class="card-text">Découvrez nos produits de haute qualité et garantis</p>
   
  </div>

</div>

<a href="reparations.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Réparations</a>

<footer>
<?php
include "footer.php" ;
?>

</footer>

</body>
</html>