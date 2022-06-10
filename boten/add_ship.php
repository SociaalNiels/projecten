<?php


if (isset($_POST["naam"]) && isset($_POST["ID"]) && isset($_POST["max_lading"]) && isset($_POST["max_gewicht"])) {
    $shipname = $_POST["naam"];
    $shipid = $_POST["ID"];
    $shipvolume = $_POST["max_lading"];
    $shipweight = $_POST["max_gewicht"];
    
    $host = 'localhost';
    $dbname = 'bestevaer';
    $username = 'root';
    $password = '';
    
    $conStr = "mysql:host=$host;dbname=$dbname" ;
    $con = new PDO($conStr, $username, $password);
    
    $sql = "INSERT INTO schepen (ID, naam, volume, gewicht) VALUES (:ID, :naam, :volume, :gewicht)";
    $params = array(":ID" => "$shipid", ":naam" => "$shipname", ":volume" => "$shipweight", ":gewicht" => "$shipvolume");
    
     
    
    $sth = $con->prepare($sql);
    $sth->execute($params);
}

?>