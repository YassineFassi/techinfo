<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Réparations</title>
</head>
<body>
<header>

<?php
include "header.php";
?>
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
          <button type="submit">Envoyez</button>
        </div>
    </form>
  

<hr>
<a href="index.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Retour</a>


<footer>
<?php
include "footer.php";
?>  

</footer>
</body>
</html>

