<?php
class connect extends PDO {

const Host="localhost";
const DB="gestioncommandes";
const pwd="";
const USR="root";

public function __construct(){
try{
parent::__construct("mysql:dbname=".self::DB.";host=".self::Host,self::USR,self::pwd);


}
catch(PDOException $e)
{
    echo $e->getMessage()." ".$e->getFile()." ".$e->getLine();
}
}
}

?>