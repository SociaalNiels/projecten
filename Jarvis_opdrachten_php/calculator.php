<?php
$a = readline("welke operatie wil je uitvoeren? (+, -, %)\n");

if (($a !== '-' && $a !== '+' && $a !== '%')) {
    echo "$a is geen geldige operatie";
    exit;   
}

$b = readline("eerste getal\n");

if (is_numeric($b) !== true) { 
    echo "$b geen getal";
    exit;
}

$c = readline("tweede getal\n");

if (is_numeric($c) !== true) { 
    echo "$c geen getal";
    exit;
}

if (($a == '-' || $a == '+' || $a == '%') && (is_numeric($b) == true) && (is_numeric($c) == true)) {
    if ($a == '+') {
        $d = $b + $c;
        echo " uw resultaat is $d";
    } elseif ($a == '-') {
        $d = $b - $c;
        echo "uw resultaat is $d";
    } elseif ($a == '%') {
        $d = $b % $c;
        echo " uw resultaat is $d";
    }  
} 
?>