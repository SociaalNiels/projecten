<?php

echo "bootlijst";

$host = 'localhost';
$dbname = 'bestevaer';
$username = 'root';
$password = '';

$conStr = "mysql:host=$host;dbname=$dbname";
$con = new PDO($conStr, $username, $password);

$stmt = "SELECT * FROM schepen WHERE maxgewicht < 8000";
$sth = $con->prepare($stmt);
$sth->execute();

echo '<h3>PHP Fetch in loop</h3>';
while($row = $sth->Fetch()) {
    echo $row['id'];
    echo ' ';
    echo $row['naam'];  
    echo $row['maxgewicht'];
    echo ' ';
    echo $row['volume'];
    echo '<br>';
    echo ' ';
   
}