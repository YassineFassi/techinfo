<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Contact</title>
</head>
<body>
<header>
<?php
include "header.php";
?>
</header>
<form>
  <div class="form-row">
  <div class="form-group col-md-4">
      <label for="inputName">Nom</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Nom">
    </div>
    <div class="form-group col-md-4">
      <label for="inputLastname">Prénom</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Prénom">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
      <div class="form-group col-md-4">
    <label for="inputAddress">Adresse</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Votre adresse">
  </div>
   <div class="form-row">
   <div class="form-group col-md-3">
      <label for="inputZip">Code Postal</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">Ville</label>
      <input type="text" class="form-control" id="inputCity">
    </div>

  
  </div>
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>

</form>
<br>
<div class="card-group col-4">
  <div class="card">
    <img src="../techinfo/mail.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"></h5>
      <a href="mailto:nullepart@mozilla.org" class="btn btn-primary">Ecrivez-nous un mail</a>
    </div>
  </div>
  <div class="card">
    <img src="../techinfo/phone.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"></h5>
      <a href="tel:+33472896622" class="btn btn-primary">Appelez nous</a>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.871584828187!2d4.844711715756815!3d45.753720322098545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea5d2cb7c00b%3A0x8933fa5f3ba6bfe7!2sSaxe%20-%20Gambetta!5e0!3m2!1sfr!2sfr!4v1574087902944!5m2!1sfr!2sfr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

      <h5 class="card-title">Retrouvez notre boutique</h5>

    </div>
  </div>
</div>
<br>


<?php
include "footer.php" ;
?>

</footer>
</body>
</html>