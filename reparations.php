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
<h1>Devis pour Réparations</h1><hr>

<div>Afin de vous fournir les devis les plus justes, soyez le plus précis possible. </div><br>

<form action="" method="post">
        <div>
          <label for="nom">Nom</label> <input type="text" id="nom" name="nom-client">
        </div>
        <div>
          <label for="prenom">Prénom</label> <input type="text" id="prenom" name="prenom-client">
        </div>
        <div>
          <label for="telephone">Numéro</label> <input type="text" id="telephone" name="telephone-client">
        </div>
        <div>
          <label for="msg">Décrivez la panne</label> <textarea id="panne" name="panne-client"></textarea>
        </div>
        <div class="button">
          <button type="submit">Envoyez votre Devis</button>
        </div>
    </form>

<hr>
<a href="index.php"> Retour </a>

</body>
</html>

