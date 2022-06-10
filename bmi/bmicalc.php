<?php

$username = $_POST["username"];

echo "bereken BMI van $username<br>"; 

$gewicht=55;
$lengte=178 / 100;
$bmi=0;

$bmi = round($gewicht / ($lengte * $lengte))."<br>";
echo $bmi."<br>";
echo "gewicht: = $gewicht"."<br>";
echo "Lengte: = $lengte"."<br>";



if ($bmi <= 18.5) {
        $gewicht = "UNDERWEIGHT";

        } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
       $gewicht = "NORMAL WEIGHT";

        } else if ($bmi > 24.9 AND $bmi<=29.9) {
        $gewicht = "OVERWEIGHT";

        } else if ($bmi > 30.0) {
        $gewicht = "OBESE";
    }
    echo "Your BMI value is  " . $bmi . "  and you are : "; 
    echo "$gewicht";

?>