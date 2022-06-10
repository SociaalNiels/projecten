<?php
    function showInfo($lengte, $breedte, $hoogte)
    {
        echo "$lengte $breedte $hoogte";
        echo "<br>";
    }
    function show_address($name, $street, $city)
    {
        echo $name . "<br>";
        echo $street . "<br>";
        echo $city;
        echo "<br><br>";
    }
    function num2month($num)
      {
          $month = "";
        
           if ($num == 1) 
             $month = "Januari";
           elseif ($num == 2) 
             $month = "Februari";
           elseif ($num == 3) 
             $month = "Maart";
          
          
              echo "<br>"; 
            return "De maand met nummer $num heeft de naam: $month";
      }

      function HoutPrijzen($houtsoort, $hoeveelhei2)
      {
          $prijs = ""; 

        
          if ($houtsoort == "Eikenhout") 
            $prijs = $hoeveelhei2 * 80;
          elseif ($houtsoort == "Spaanhout") 
            $prijs = $hoeveelhei2 * 12; 
          elseif ($houtsoort == "Berkenhout") 
            $prijs = $hoeveelhei2 * 30;
          elseif ($houtsoort == "Beukenhout")
            $prijs = $hoeveelhei2 * 150;
         
         
             echo "<br><br>"; 
           return "$hoeveelhei2 m2 $houtsoort kost $prijs euro";

      }


    showInfo(10, 20, 30);
    showInfo(7, 45, 38);
    showInfo(15, 6, 90);
    echo "<br>";
    show_address("Jan van Klaveren", "Bloemstraat 12", "Utrecht");
    show_address("Niels Kenter", "Nieuwlicht 24", "Blokker");
 
    echo num2month("1");
    echo num2month("2");
    echo num2month("3");
    echo HoutPrijzen("Beukenhout", "3");
    ?>

