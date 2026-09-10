<?php
include_once("header.php");
include_once("main.php");





if (!empty($_POST["nom"]) && !empty($_POST["adress"]) && !empty($_POST["tel"])) {

    $rqt = "INSERT INTO client (nom, ville, telephone) 
            VALUES (:nom, :adress, :tel)";

    $st = $pdo->prepare($rqt);

    $st->execute([
        "nom" => $_POST["nom"],
        "adress" => $_POST["adress"],
        "tel" => $_POST["tel"]
    ]);
    header("Location:client.php");
}

?>

<h1> Ajouter un CLient</h1>
<form class="row g-3" method="POST">
    <div class="col-12">
    <label for="inputAddress" class="form-label">Nom</label>
    <input type="text" class="form-control" id="inputAddress" name="nom" required >
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Ville</label>
    <input type="text" class="form-control" id="inputAddress2" name="adress" required >
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Telephone</label>
    <input type="text" class="form-control" id="inputCity" name="tel"  required >
  </div>
 
   <div class="col-12">
    <button type="submit" class="btn btn-primary"  style="margin-top:20px" >Ajouter</button>
  </div>
</form>

<?php

;

?>

<?php 
include_once("footer.php")
?>