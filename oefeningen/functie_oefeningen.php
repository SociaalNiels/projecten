<?php
    function showInfo($voornaam, $achternaam, $leeftijd)
    {
        echo "naam: $voornaam $achternaam";
        echo "<br>";
        echo "leeftijd: $leeftijd";
        echo "<br><br>";
    }
    function say_text($the_text) 
    {
        echo $the_text;
        echo "<br><br>";
    
    }
    function show_address($name, $street, $city)
    {
        echo $name . "<br>";
        echo $street . "<br>";
        echo $city;
        echo "<br><br>";

    }
    function calc_sum($number1, $number2)
    {
        $result = $number1 + $number2;
        echo $result;
        echo "<br><br>";
 
    }
    function celsius2fahrenheit($degreescelcius) 
    {
        $fahrenheit=$degreescelcius*9/5+32;
        echo $fahrenheit;
        echo "<br><br>";
    }
    function print_aanhef($geslacht, $naam2)
    {
        if( $geslacht== "man")
            echo "Geachte heer $naam2";
          
          if( $geslacht== "vrouw")
            echo "Geachte mevrouw $naam2" ;
          
          elseif( $geslacht== "")
              echo "Beste";     
              echo "<br><br>";
    }
    function euro2dollar($euro)
    {
        $dollar=$euro/100*114;
        echo $dollar;
        echo "<br><br>";
    }
    function tafelvan10()
    {
        for ( $i=1; $i<11; $i++) {
            echo $i . " x 10 = " . $i * 10 . "<BR>";
         }
         echo "<br><br>";

    }
    function print_tafel($tafel)
    {
        for ( $i=1; $i<11; $i++) {
            echo $i . " x 10 = " . $i * $tafel . "<BR>";
         }
         echo "<br><br>";


    }


    showInfo("Jan","Vervoort",20);
    showInfo("Piet","Verstegen",17);
    showInfo("Els","Janssen",23);
    
    say_text("Dit is een test!");

    show_address("Niels Kenter", "Nieuwlicht 24", "Blokker");

    calc_sum("9", "6");

    celsius2fahrenheit("10");

    print_aanhef("Vrouw","Kenter");

    euro2dollar(20); 

    tafelvan10();

    print_tafel(9);
   
    ?>

