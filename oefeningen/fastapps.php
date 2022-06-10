<?php

/*
 * 11-10-2016 Theo Wiersmaa
 * Dit is een overzicht van de medewerkers van FastApps
 * Ik heb dit overzicht gemaakt tijdens mij snuffelstage bij FastApps
 * Het wordt een overzicht van de medewerkers met de volgende gegegevens:
 * - Medewerker gegevens (naam, adres, woonplaats, geboortedatum, functie)
 * - Salaris gegegevens per maand en per jaar
 * - Berekening van alle salariskosten per maand en per jaar
 */
 
 
 /*
  * medewerker gegevens
  * (volgens Miranda kan ik hier een functie voor maken, maar ik weet niet wat ze bedoelt daarmee)
  */
  
  $medewerker1_achternaam = "Brugge";
  $medewerker1_voornaam = "Jan";
  $medewerker1_tussenvoegsel = "ter";
  $medewerker1_geboortedatum = "12-10-1999";
  $medewerker1_functie = "Junior programmer";
  
  $medewerker2_achternaam = "Mijerink";
  $medewerker2_voornaam = "Miranda";
  $medewerker2_tussenvoegsel = "";
  $medewerker2_geboortedatum = "08-02-2020";
  $medewerker2_functie = "Lead programmer";

  $medewerker3_achternaam = "Heuvel";
  $medewerker3_voornaam = "Howard";
  $medewerker3_tussenvoegsel = "van den";
  $medewerker3_geboortedatum = "01-03-1980";
  $medewerker3_functie = "Projectleider";

  $medewerker4_achternaam = "Kattenluik";
  $medewerker4_voornaam = "Minoes";
  $medewerker4_tussenvoegsel = "van";
  $medewerker4_geboortedatum = "06-06-1990";
  $medewerker4_functie = "Webdesigner";

  $medewerker5_achternaam = "Tuitenberg";
  $medewerker5_voornaam = "Henk";
  $medewerker5_tussenvoegsel = "";
  $medewerker5_geboortedatum = "06-07-1980";
  $medewerker5_functie = "Directeur";

  echo "<h1>FastApps Rapportage</h1>";
  echo "<br>";

  echo "<h2>Medewerkers</h2>";
  echo "<br>";
  echo "<b>Naam:</b> $medewerker1_voornaam $medewerker1_tussenvoegsel $medewerker1_achternaam";
  echo "<br>";
  echo "<b>Geboortedatum:</b> $medewerker1_geboortedatum";
  echo "<br>";
  echo "<b>Functie:</b> $medewerker1_functie";

  echo "<br><br>";

  echo "<b>Naam:</b> $medewerker2_voornaam $medewerker2_tussenvoegsel $medewerker2_achternaam";
  echo "<br>";
  echo "<b>Geboortedatum:</b> $medewerker2_geboortedatum";
  echo "<br>";
  echo "<b>Functie:</b> $medewerker2_functie";

  echo "<br><br>";

  echo "<b>Naam:</b> $medewerker3_voornaam $medewerker3_tussenvoegsel $medewerker3_achternaam";
  echo "<br>";
  echo "<b>Geboortedatum:</b> $medewerker3_geboortedatum";
  echo "<br>";
  echo "<b>Functie:</b> $medewerker3_functie";

  echo "<br><br>";  

  echo "<b>Naam:</b> $medewerker4_voornaam $medewerker4_tussenvoegsel $medewerker4_achternaam";
  echo "<br>";
  echo "<b>Geboortedatum:</b> $medewerker4_geboortedatum";
  echo "<br>";
  echo "<b>Functie:</b> $medewerker4_functie";

  echo "<br><br>";  

  echo "<b>Naam:</b> $medewerker5_voornaam $medewerker5_tussenvoegsel $medewerker5_achternaam";
  echo "<br>";
  echo "<b>Geboortedatum:</b> $medewerker5_geboortedatum";
  echo "<br>";
  echo "<b>Functie:</b> $medewerker5_functie";

  echo "<br><br>";  


  /*
   * Salarisgegevens
   * (dit moet volgens Miranda ook een functie worden)
   */ 

  $salaris1 = 2200;
  $salaris2 = 3500;
  $salaris3 = 2000;
  $salaris4 = 2200;
  $salaris5 = 5000;


  function Saloverzicht($naam, $Salaris)
{
  echo "<b>Werknemer:</b> $naam";
  echo "<br>";
  echo "<b>Maandsalaris:</b> $salaris";
  echo "<br>";
  echo "<b>Jaarsalaris: </b>" .  $salaris * 12;
  echo "<br><br>";
}



  echo "<h2>Salarisoverzicht</h2>";
  echo "<br>";

  Saloverzicht($medewerker1_achternaam, $salaris1);

  Saloverzicht($medewerker1_achternaam, $salaris2);

  Saloverzicht($medewerker1_achternaam, $salaris3);

  Saloverzicht($medewerker1_achternaam, $salaris4);

  Saloverzicht($medewerker1_achternaam, $salaris5);

 

  /*
   * Totale salariskosten
   */

  echo "<br><br>";
  echo "<h2>Salariskosten</h2>";
  echo "<b>Aantal medewerkers:</b> 5";
  echo "<br>";
  echo "<b>Maandsalaris totaal:</b> " . ($salaris1 + $salaris2 + $salaris3 + $salaris4 + $salaris5);
  echo "<br>";
  echo "<b>Jaarsalaris totaal:</b> " . ($salaris1 * 12 + $salaris2 * 12 + $salaris3 * 12 + $salaris4 * 12 + $salaris5 * 12);