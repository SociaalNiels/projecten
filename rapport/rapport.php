<?php

// Dit is rapport 'a1'
// Het rapport toont gegevens van een medewerker
// en berekent het vakantiegeld

// De gegevens van de medewerker
// (moeten in een volgende versie uit een formulier komen)

$voornaam_medewerker = "Jan";
$achternaam_medewerker = "van Steen";
$geboortedatum_medewerker = "10-12-1970";
$maandsalaris_medewerker = 3000;

// 1. Toon de gegevens van de medewerker
// Maak van dit stukje code een functie. 
// De functie krijgt vier parameters: voornaam, achternaam, geboortedatum, maandsalaris
function namen($voornaam_medewerker, $achternaam_medewerker, $geboortedatum_medewerker, $maandsalaris_medewerker)
{
echo "Medewerker: $voornaam_medewerker $achternaam_medewerker<br>" .
 "Geboren: $geboortedatum_medewerker<br>" .
 "Maandsalaris: $maandsalaris_medewerker<br>";
}
namen($voornaam_medewerker, $achternaam_medewerker, $geboortedatum_medewerker, $maandsalaris_medewerker);

// 2. Bereken en toon het vakantiegeld
// Maak van dit stukje code een functie
// De functie krijgt 2 parameters: maandsalaris en percentage
function loon($procent, $maandsalaris_m) {
    $vakantiegeld = $maandsalaris_m * 12 * $procent / 100;
    echo "Vakantiegeld" = $vakantiegeld ()
}
$percentage = 8;
$vakantiegeld = $maandsalaris_medewerker * 12 * $percentage / 100;


echo "Vakantiegeld: $vakantiegeld ($percentage%)";


?>