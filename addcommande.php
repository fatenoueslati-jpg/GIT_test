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

$listAr=[];
$reqAr="select idarticle from article ";
$pdostAr=$pdo->prepare($reqAr);
$pdostAr->execute();

foreach($pdostAr->fetchALL(PDO::FETCH_NUM )AS $tabvalues ){

 foreach($tabvalues as $tabelm1){
$listAr[]=$tabelm1;
}
}



if (!empty($_POST["clt"]) && !empty($_POST["dt"])) {

    $rqt = "INSERT INTO commande (idclient,date) 
            VALUES (:idclt, :dt)";

    $st = $pdo->prepare($rqt);

    $st->execute([
        "idclt" => $_POST["clt"],
        "dt" => $_POST["dt"],
        
    ]);

    //insetion dans ligne commande 

      $rqt1 = "INSERT INTO ligne (idarticle,qu) 
            VALUES (:idar, :quAr)";

    $st1 = $pdo->prepare($rqt1);

    $st1->execute([
        "idar" => $_POST["idar"],
        "quAr" => $_POST["qu"],
        
    ]);
    header("Location:commande.php");
}

?>

<h1> Ajouter une commandee</h1>
<form class="row g-3" method="POST">
    <div class="col-6">
          <label for="floatingTextarea">IDCLIENT</label>

  <select class="form-control" placeholder="description"  name="clt" id="floatingTextarea">
    <?php  foreach ($list as $idclient)  { ?>
        <option value="<?php echo htmlspecialchars($idclient); ?>">
            <?php echo htmlspecialchars($idclient); ?>
        </option>
    <?php } ?> 


  </select>
</div>

<div class="col-6">
          <label for="floatingTextarea">idarticle</label>

  <select class="form-control" placeholder="description"  name="idar" > 
 <?php foreach ($listAr as $idAr) :?>
        <option >
            <?= htmlspecialchars($idAr) ?>
        </option>
    <?php endforeach; ?>  </select>
</div>
 
  <div class="col-6">
    <label for="inputAddress2" class="form-label">date</label>
    <input type="date" class="form-control" id="inputAddress2" name="dt" required >
  </div>
 <div class="col-6">
    <label for="inputAddress2" class="form-label">quantité</label>
    <input type="text" class="form-control" id="inputAddress2" name="qu" required >
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