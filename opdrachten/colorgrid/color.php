<?php

$host = 'localhost';
$dbname = 'colorgrid';
$username = 'root';
$password = '';

$conStr = "mysql:host=$host;dbname=$dbname";
$db = new PDO($conStr, $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

$sql = "SELECT * FROM colors";
try {
    $sth = $db->prepare($sql);
    $sth->execute();
} catch (PDOException $e) {
    // In de catch wordt de fout afgevangen en kan je iets met de foutmelding
    // doen, bijvoorbeeld tonen of loggen
    echo $e->getMessage();
}

$colors = [];
while($row = $sth->fetch()) {
  $kleur = $row["kleuren"];
  array_push($colors, $kleur);
  // $colors[$kleur] = ["kleuren" => $kleur];
}
echo json_encode($colors);

?>


