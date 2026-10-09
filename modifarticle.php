<?php
include_once("header.php");
include_once("main.php");



  if (!empty($_POST) ){

  echo "id".$_GET["id"];

 $sql = "update article  set description=:des, prix=:prix where idarticle=:id";

    $st = $pdo->prepare($sql);

    $st->execute([
        "des" => $_POST["desc"],
         "prix" => $_POST["prix"],
            
         "id"=> $_POST["myid"],
    ]);
header("location:article.php");
exit();
  }

if (!empty($_GET["id"]) ) {

    $rqt = "select * from article   where idarticle=:id";

    $st = $pdo->prepare($rqt);

    $st->execute([
        "id" => $_GET["id"],
        
    ]);
while($row=$st->fetch(pdo::FETCH_ASSOC)): 



?>

<h1> Modifier un Article</h1>
<form class="row g-3" method="POST">
    <div class="col-12">
        <input type="hidden" name="myid" value=<?php echo  $row["idarticle"]  ?> >
</div>
   <div class="col-12">
          <label for="floatingTextarea">description</label>

  <textarea class="form-control" placeholder="description"  name="desc" > <?php echo $row['description'] ?>   </textarea>
</div>
 
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Prix</label>
    <input type="text" class="form-control" id="inputAddress2" name="prix"  value="<?php echo $row["prix"] ?>"  required >
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
