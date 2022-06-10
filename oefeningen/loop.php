<?php

echo "opdracht 3<br>";

$boodschappen = array("Melk", "Kaas", "Worst", "Brood", "Thee");
$zoek = "Kaas";
for($i = 0; $i < 5; $i++) {
    if ($boodschappen[$i] ==$zoek) {
        echo "$zoek zit in de lijst";
        
    } 

}

echo "<br>Opdracht 4<br>";
    for ($y = 0; $y <=1000; $y+=1)
    {
    $teller += $y;
}
echo "totaal = $teller <br>";

echo "<br>Opdracht 5<br>";
  $x = 0;
  while ($x <= 100)
{
  if ($x%2==0)  
  {
    echo $x. "<br>"; 
  }
  $x++;
}

echo "<br>Opdracht 6<br>";
    $x = 1;
  while ($x <= 100)
{
  if ($x%3==0)  
  {
    echo $x. "<br>"; 
  }
  $x++;
}

echo "<br>Opdracht 7<br>";
for($Q =0; $Q <= 1000; $Q++)
{
  echo is_prime($Q);
}


echo "<br>Opdracht 8<br><br>";
$time_start = microtime(true);
for($t = 1000000; $t <=2000000; $t++)
{

  is_prime($t);
}
$time_end = microtime(true);
$time = $time_end - $time_start;

echo "$time<br>";

function is_prime($number)
{
if ( $number == 1 )
{
return false;
}
if ( $number == 2 )
{
return $number;
}
$x = sqrt($number);
$x = floor($x);
for ( $i = 2 ; $i <= $x ; ++$i )
{
if ( $number % $i == 0 )
{
break;
}
}
if( $x == $i-1 )
{
return $number;
}
else
{
return false;
}
}



echo "<br>Opdracht 9<br><br>";

$list = array("opdracht1 ", "opdracht2 ", "opdracht3 ", "opdracht4 ", "opdracht5 ", "opdracht6 ");
echo $list[0].$list[1].$list[2].$list[3].$list[4]."<br><br>";

for ($i=0; $i < 1; $i++)
{
    echo "OPDRACHTEN Gedaan<br>▼▼▼". "<br>";
}
foreach($list as $elementen)
{
    echo $elementen."<br>";
}

echo "<br>Opdracht 10<br>";
$kerstboom = array("*", "**", "***", "****", "*****");
echo $kerstboom[0]."<br>".$kerstboom[1]."<br>".$kerstboom[2]."<br>".$kerstboom[3]."<br>".$kerstboom[4]."<br>";
for ($G = 0; $G <= 4; $G+=1) {
  if($kerstboom[$G] == "*****")
  {
    echo "is er een 5de lijn?";
  }
}
















