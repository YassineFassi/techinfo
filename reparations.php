<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Réparations</title>
</head>
<body>
<header>
	
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Acceuil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="reparations.php">Réparations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="presentation.php" tabindex="-1" aria-disabled="true">Qui sommes-nous ?</a>
      </li>
    </ul>
  </div>
</nav>
		</header>
<h1>Devis pour Réparations</h1><hr>

<div>Afin de vous fournir les devis les plus justes, soyez le plus précis possible </div><br>

<form action="" method="post">
        <div>
          <label for="nom">Nom</label> <input type="text" id="nom" class="form-control" name="nom-client">
        </div>
        <div>
          <label for="prenom">Prénom</label> <input type="text" id="prenom" class="form-control" name="prenom-client">
        </div>
        <div>
          <label for="telephone">Numéro</label> <input type="text" id="telephone" class="form-control" name="telephone-client">
        </div>
        <label for="type">Type de Panne</label> <select name ="listpanne" form="type" class="form-control" name="type-panne" >
                <option value = "type 1">Téléphone Portable</option>
                <option value = "type 2">Ordinateur Fixe</option>
                <option value = "type 3">Ordinateur Portable</option>
                <option value = "type 4">Autres</option>
        <div>
          <label for="panne">Décrivez la panne</label> <textarea id="panne" class="form-control" name="panne-client"></textarea>
        </div>
        <div class="button">
          <button type="submit">Envoyez votre Devis</button>
        </div>
    </form>

<hr>
<a href="index.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Retour</a>


<footer>
<a href="contact.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Contact</a>
<a href="presentation.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Qui sommes-nous ?</a>
</footer>
</body>
</html>

