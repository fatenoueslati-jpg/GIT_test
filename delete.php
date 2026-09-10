<?php

include_once("main.php");
if(!empty($_GET["id"])) {
var_dump($_GET["id"]);
$req="delete from client where idclient=:id";
$st=$pdo->prepare($req);
$st->execute(["id"=>$_GET["id"]]);
header("Location:client.php");



}
?>