<?php

$sql = "INSERT INTO `adressen2` (`voornaam`, `achternaam`, `adres`, `huisnummer`, `woonplaats`, `postcode`) VALUES (:voornaam, :achternaam, $adres, $huisnummer, $Woonplaats, $postcode)";

$params = array(":naam" => "", ":");

$sth = $db->prepare($sql);
$sth->execute($params);

?>



