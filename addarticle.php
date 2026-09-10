<?php
include_once("header.php");
include_once("main.php");





if (!empty($_POST["desc"]) && !empty($_POST["prix"])) {

    $rqt = "INSERT INTO article (description,prix) 
            VALUES (:desc, :prix)";

    $st = $pdo->prepare($rqt);

    $st->execute([
        "desc" => $_POST["desc"],
        "prix" => $_POST["prix"],
        
    ]);
    header("Location:article.php");
}

?>

<h1> Ajouter un article</h1>
<form class="row g-3" method="POST">
    <div class="col-12">
          <label for="floatingTextarea">description</label>

  <textarea class="form-control" placeholder="description"  name="desc" id="floatingTextarea"></textarea>
</div>
 
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Prix</label>
    <input type="text" class="form-control" id="inputAddress2" name="prix" required >
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