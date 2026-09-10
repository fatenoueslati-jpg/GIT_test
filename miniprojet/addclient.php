<?php
include_once("header.php");
include_once("main.php")
?>

<h1> Ajouter un CLient</h1>
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nom</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Ville</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Telephone</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary" style="margin-top:20px">Ajouter</button>
  </div>
</form>
<?php 
include_once("footer.php")
?>