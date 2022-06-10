<?php



$achternaam = array("Brugge" , "Mijerink" , "Heuvel" , "Kattenluik" , "Tuitenberg");
$voornaam = array("Jan" , "Miranda" , "Howard" , "Minoes" , "Henk");
$tussenvoegsel = array("ter" , "" , "van den" , "van" , "");
$geboortedatum = array("12-10-1999" , "08-02-2020" , "01-03-1980" , "06-06-1990" , "06-07-1980");
$functie = array("Junior programmer" , "Lead programmer" , "Projectleider" , "Webdesigner" , "Directeur");

$medewerkers[0] = "jan";
$medewerkers[1] = "van steen";
$medewerkers[2] = "10-12-1970";
$medewerkers[3] = 3000;
$medewerkers[4] = 8;

function werknemergegevens($medewerkers) {
    global $achternaam, $voornaam, $tussenvoegsel, $geboortedatum, $functie;
    for ($i= 0; $i< 5;$i++){
        echo "<h2>Medewerkers:</h2>";
        
        echo "naam:"

    }

}




    echo "<h1>FastAp(p)s Rapportage</h1>";
    echo "<br>";
  werknemergegevens();

  /*
   * Salarisgegevens
   * (dit moet volgens Miranda ook een functie worden)
   */ 
  $salaris = array(2200 , 3500 , 2000 , 2200 , 5000);

  function salaris(){
      global $salaris , $voornaam , $tussenvoegsel , $achternaam , $functie;
      for ($i=0; $i < 5 ; $i++) { 
            $jaarsalaris = $salaris[$i] * 12;
          echo "<h2>Salarisoverzicht</h2>
                <br>
                <b>Werknemer:</b> $voornaam[$i] $tussenvoegsel[$i] $achternaam[$i]
                <br>
                <b>Maandsalaris:</b> $salaris[$i]
                <br>
                <b>Jaarsalaris: </b>$jaarsalaris
                ";

      }
  }
  salaris();

  $maandSalarisTotaal = $salaris[0] + $salaris[1] + $salaris[2] + $salaris[3] + $salaris[4];
$jaarSalarisTotaal = $maandSalarisTotaal * 12;
  echo "<br><br>
    <h2>Salariskosten</h2>
    <b>Aantal medewerkers:</b> 5
    <br>
    <b>Maandsalaris totaal:</b> $maandSalarisTotaal
    <br>
    <b>Jaarsalaris totaal:</b> $jaarSalarisTotaal";
  ?>