<?php
    function showInfo($voornaam, $achternaam, $leeftijd){
        echo "naam: $voornaam $achternaam";
        echo "<br>";
        echo "leeftijd: $leeftijd";
        echo "<br><br>";
    }
    
    showInfo("Jan","Vervoort",20);
    showInfo("Piet","Verstegen",17);
    showInfo("Els","Janssen",23);
?>