<?php



$medewerker = [];
$medewerker["naam"] = "jan";
$medewerker["achternaam"] = "van steen";
$medewerker["geboortedatum"] = "10-12-1970";
$medewerker["salaris"] = 3000;

$percentage = 8;

$medewerkers = array(
$medewerker1 = [
    "naam" => "Jan",
    "achternaam" => "Ter Brugge",
    "geboortedatum" => "12-10-1999",
    "functie" => "Junior programmer"
],

$medewerker2 = [
    "naam" => "Miranda",
    "achternaam" => "Mijerink",
    "geboortedatum" => "08-02-2020",
    "functie" => "Lead programmer"
],

$medewerker3 = [
    "naam" => "Howard",
    "achternaam" => "van den Heuvel",
    "geboortedatum" => "01-03-1980",
    "functie" => "Projectleider"
],

$medewerker4 = [
    "naam" => "Minoes",
    "achternaam" => "Van Kattenluik",
    "geboortedatum" => "06-06-1990",
    "functie" => "Webdesigner"
],

$medewerker5 = [
    "naam" => "Henk",
    "achternaam" => "Tuitenberg",
    "geboortedatum" => "06-07-1980",
    "functie" => "Directeur"
],
);

$medewerkers = [$medewerker1 , $medewerker2 , $medewerker3 , $medewerker4 , $medewerker5];

foreach ($medewerkers as $key => $val){
    foreach($val as $key => $val)
    echo "$key: $val <br>";
}

$arr = array('','World!','Beautiful','Day!');


function ShowMedewerker($medewerker) 
{
    
    echo "<h1> Rapport 1A</h1>";
    
    echo "Medewerker:" . $medewerker ["naam"] . "" . $medewerker["achternaam"] . "<br>";
    echo "geboortedatum:" . $medewerker ["geboortedatum"] . "<br>";
    
}


function BerekenGeld($medewerker, $procent) 
{
    $vakantiegeld = $procent * 12 * $procent / 100;
    echo "Vakantiegeld = $vakantiegeld ($procent%)";
}

ShowMedewerker($medewerker);

BerekenGeld($medewerker, $percentage);


?>