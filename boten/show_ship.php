<?php
/*
$schepen = array(
    "athens glory" => ["naam" => "athens glory", "max_lading" => 10000, "m3" => 100],
    "apostolos II" => ["naam" => "apostolos II", "max_lading" => 20000, "m3" => 200],
    "hmm le havre" => ["naam" => "hmm le havre", "max_lading" => 30000, "m3" => 300],
);
*/
$host = 'localhost';
$dbname = 'bestevaer';
$username = 'root';
$password = '';

$conStr = "mysql:host=$host;dbname=$dbname";
$db = new PDO($conStr, $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 




$sql = "SELECT * FROM schepen";

echo "lijst met schepen <br>";

try {
 
    // Dit stukje code wil je beschermen tegen een fout
    
    $sth = $db->prepare($sql);
    $sth->execute();
    /*
    $sth = $db->query($sql);
    */
  } catch (PDOException $e) {
    // In de catch wordt de fout afgevangen en kan je iets met de foutmelding
    // doen, bijvoorbeeld tonen of loggen
    echo $e->getMessage();
  }
  

while($row = $sth->fetch()) {
    $naam = $row['naam'];
    $gewicht = $row['gewicht'];  
    $volume = $row['volume'];
    $schepen[$naam] = ["naam" => $naam, "max_lading" => $gewicht, "m3" => $volume];
    echo "$naam $gewicht $volume <br> ";
}


?>