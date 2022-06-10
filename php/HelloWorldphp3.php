<?php

$leeftijd = random_int (1, 36);
$cijfer = random_int (0.0, 10.0);
$snelheid = random_int (0, 380);
$max_snelheid = 100;
$tehard = $snelheid - $max_snelheid;
$kosten = random_int (0, 500);
$verzendkosten = 0;
$totale_kosten = 0;
$error = random_int (1, 9);
$message = "";

if ($leeftijd < 18) {
    echo ("Dit persoon heeft de leeftijd van $leeftijd en is natuurlijk Leerplichtig, ");
} else {
    echo ("Dit persoon heeft de leeftijd van $leeftijd en is natuurlijk Niet leerplichtig, ");
}

if ($cijfer < 5.5) {
    echo (" zijn behaalde cijfer is $cijfer en is dus Onvoldoende. ");
} else {
    echo (" zijn behaalde cijfer is $cijfer en is dus Voldoende. ");
}
    echo "<br>";
if ($snelheid > $max_snelheid) {
    echo ("Maar heeft net $tehard Kilometer per uur te hard gereden en krijgt dus een boete.");
} else {
    echo ("En heeft gelukig onder de $max_snelheid Kilometer per uur gereden en mag dus door rijden.");
}
echo "<br>";
echo "<br>";
echo "<br>";

if ($kosten < 100) {
    $verzendkosten = 6;
} else if ($kosten < 500) {
    $verzendkosten = 3;
} else {
    $verzendkosten = 0;
}

echo ("De kosten zijn: $kosten Euro");
echo "<br>";
echo ("De verzendkosten zijn: $verzendkosten Euro");
echo "<br>";
echo ('De totale kosten zijn: ' .$totale_kosten = $verzendkosten + $kosten. ' Euro');

switch ($error) {
    case 1:
        $message = "No memory";
        break;
    case 2:
        $message = "Syntax error";
        break;
    case 3:
        $message = "No elements";
        break;
    case 4:
        $message = "Invalid token";
        break;
    case 5:
        $message = "Unclose token";
        break;
    case 6:
        $message = "Partial char";
        break;
    case 7:
        $message = "Tag mismatch";
        break;
    case 8:
        $message = "Duplicate attribute";
        break;
    case 9:
        $message = "Junk after doc element";
        break;
    default:
        $message = "Ik heb eigenlijk geen idee wat ik hier mee moet..";
        break;
}
echo "<br>";
echo "<br>";
echo "<br>";
print ($message);
