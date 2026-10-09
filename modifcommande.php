<?php
include_once("header.php");
include_once("main.php");

$list=[];
$reqSup="select idclient from client ";
$pdostsup=$pdo->prepare($reqSup);
$pdostsup->execute();

foreach($pdostsup->fetchALL(PDO::FETCH_NUM )AS $tabvalues ){

 foreach($tabvalues as $tabelm){
$list[]=$tabelm;
}
}
//idarticle

$list=[];
$reqAr="select idarticle from article ";
$pdostAr=$pdo->prepare($reqAr);
$pdostAr->execute();

foreach($pdostAr->fetchALL(PDO::FETCH_NUM )AS $tabvalues ){

 foreach($tabvalues as $tabelm){
$listAr[]=$tabelm;
}
}

  if (!empty($_POST) ){

  echo "id".$_GET["id"];

 $sql = "update commande  set idclient=:idcl, date=:dt where idcommande=:id";

    $st = $pdo->prepare($sql);

    $st->execute([
        "idcl" => $_POST["idcl"],
         "dt" => $_POST["dt"],
            
         "id"=> $_POST["myid"],
    ]);
header("location:commande.php");
exit();
  }

if (!empty($_GET["id"]) ) {

    $rqt = "select * from commande   where idcommande=:id";

    $st = $pdo->prepare($rqt);

    $st->execute([
        "id" => $_GET["id"],
        
    ]);
while($row=$st->fetch(pdo::FETCH_ASSOC)): 



?>

<h1> Modifier une commande</h1>
<form class="row g-3" method="POST">
    <div class="col-12">
        <input type="hidden" name="myid" value=<?php echo  $row["idcommande"]  ?> >
</div>
   <div class="col-12">
          <label for="floatingTextarea">idclient</label>

  <select class="form-control" placeholder="description"  name="idcl" > 
 <?php foreach ($list as $idcl): ?>
        <option value="<?= htmlspecialchars($idcl) ?>"
            <?= ($row["idclient"] == $idcl) ? "selected" : "" ?>>
            <?= htmlspecialchars($idcl) ?>
        </option>
    <?php endforeach; ?>  </select>
</div>
  <div class="col-12">
          <label for="floatingTextarea">idarticle</label>

  <select class="form-control" placeholder="description"  name="idcl" > 
 <?php foreach ($list as $idcl): ?>
        <option value="<?= htmlspecialchars($idcl) ?>"
            <?= ($row["idclient"] == $idcl) ? "selected" : "" ?>>
            <?= htmlspecialchars($idcl) ?>
        </option>
    <?php endforeach; ?>  </select>
</div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">date</label>
    <input type="date" class="form-control" id="inputAddress2" name="dt"  value="<?php echo $row["date"] ?>"  required >
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">date</label>
    <input type="date" class="form-control" id="inputAddress2" name="dt"  value="<?php echo $row["date"] ?>"  required >
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
