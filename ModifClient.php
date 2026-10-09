<?php
include_once("header.php");
include_once("main.php");
echo  "id".$_GET["id"];

 if (!empty($_POST) ){


 $sql = "update client  set nom=:nom, ville=:ville, telephone=:tel where idclient=:id";

    $st = $pdo->prepare($sql);

    $st->execute([
        "nom" => $_POST["nom"],
         "ville" => $_POST["adress"],
         "tel"=> $_POST["tel"],   
         "id"=> $_POST["myid"],
    ]);

  }
header("location:client.php");
exit();

if (!empty($_GET["id"]) ) {

    $rqt = "select * from client   where idclient=:id";

    $st = $pdo->prepare($rqt);

    $st->execute([
        "id" => $_GET["id"],
        
    ]);
while($row=$st->fetch(pdo::FETCH_ASSOC)): 



?>

<h1> Modifier un CLient</h1>
<form class="row g-3" method="POST">
    <div class="col-12">
        <input type="hidden" name="myid" value=<?php echo  $row["idclient"]  ?> >
    <label for="inputAddress" class="form-label">Nom</label>
    <input type="text" class="form-control" id="inputAddress" name="nom" value="<?php echo $row['nom'] ?> " required >
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Ville</label>
    <input type="text" class="form-control" id="inputAddress2" name="adress"  value="<?php echo $row["ville"] ?>" required >
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Telephone</label>
    <input type="text" class="form-control" id="inputCity" name="tel" value=<?php echo $row["telephone"] ?> required >
  </div>
 
   <div class="col-12">
    <button type="submit" class="btn btn-primary"  style="margin-top:20px" >Modifier</button>
  </div>
</form>

<?php

  endwhile;

 echo  "idendwhile".$_GET["id"];
  }

 
?>


<?php 
include_once("footer.php");
?>
