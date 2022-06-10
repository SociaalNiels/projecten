<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://fonts.googleapis.com/css?family=Baloo+Bhai"
      rel="stylesheet"/>
    <link rel="stylesheet" href="style.css"/>
    <title>Form</title>


</head>
<body>
  <form action="" method="post">
    <h1 class="heading">Adreslijst!</h1>

    <label for="voornaam">Voornaam</label>
    <input type="text" placeholder="Voornaam" name="voornaam"/>
    <label for="text">Achternaam</label>
    <input type="text" placeholder="Achternaam" name="achternaam"/>
    <label for="adres">Adres</label>
    <input type="text" placeholder="Adres" name="adres"/>    
    <label for="subject">huisnummer:</label>
    <input type="text" placeholder="huisnummer" name="huisnummer"/>
    <label for="postcode">postcode:</label>
    <input type="text" placeholder="postcode" name="postcode"/>
    <label for="woonplaats">woonplaats:</label>
    <input type="text" placeholder="woonplaats" name="woonplaats"/>

    <div class="a">
      <p><input type="submit" name="submit" value="opslaan"></p>
    </div>  
  </form>

<?php

$host = 'localhost';
$dbname = 'adreslijst';
$username = 'root';
$password = '';

$connectStr = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8';
$db = new PDO($connectStr, $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 


// POST

if ( isset( $_POST[ "submit" ] ) ) {
  
  $voornaam   = htmlspecialchars( $_POST[ "voornaam" ] );
  $achternaam = htmlspecialchars( $_POST[ "achternaam" ] );
  $adres      = htmlspecialchars( $_POST[ "adres" ] );
  $huisnummer = htmlspecialchars( $_POST[ "huisnummer" ] );
  $woonplaats = htmlspecialchars( $_POST[ "woonplaats" ] );
  $postcode   = htmlspecialchars( $_POST[ "postcode" ] );

  $sql = "INSERT INTO adressen2 (voornaam, achternaam, adres, huisnummer, woonplaats, postcode) 
          VALUES (:voornaam, :achternaam, :adres, :huisnummer, :woonplaats, :postcode)";

  $params = array(
    ":voornaam"   => $voornaam,
    ":achternaam" => $achternaam,
    ":adres"      => $adres,
    ":huisnummer" => $huisnummer,
    ":woonplaats" => $woonplaats,
    ":postcode"   => $postcode
  );
  
  try {
    $sth = $db->prepare($sql);
    $sth->execute($params);
  } catch (PDOException $e) {
    echo $e->getMessage();
  }

}


// RETRIEVE

$sql = "SELECT * FROM adressen2";
$sth = $db->prepare($sql);
$sth->execute();

echo "<table>";
while($row = $sth->fetch()) {
  echo "<tr>";
    $voornaam = $row["voornaam"];
    echo "<td>$voornaam</td>";
    $achternaam = $row["achternaam"];
    echo "<td>$achternaam</td>";
    $adres = $row["adres"];
    echo "<td>$adres</td>";
    $huisnummer = $row["huisnummer"];
    echo "<td>$huisnummer</td>";
    $woonplaats = $row["woonplaats"];
    echo "<td>$woonplaats</td>";
    $postcode = $row["postcode"];
    echo "<td>$postcode</td>";
  echo "</tr>";
}
echo "</table>";


  // while($row = $sth->fetch()) {
  //   echo "<tr>";
  //   $voornaam = $row["voornaam"];
  //   echo "<td>$voornaam</td>";
  //   $achternaam = $row["achternaam"];
  //   echo "<td>$achternaam</td>";
  //   $adres = $row["adres"];
  //   echo "<td>$adres</td>";
  //   $huisnummer = $row["huisnummer"];
  //   echo "<td>$huisnummer</td>";
  //   $woonplaats = $row["woonplaats"];
  //   echo "<td>$woonplaats</td>";
  //   $postcode = $row["postcode"];
  //   echo "<td>$postcode</td>";
  //   echo "</tr>";
  //   }


 
?>



</body>
</html>
