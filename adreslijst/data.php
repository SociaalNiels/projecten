<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>voornaam</th>
<th>achternaam</th>
<th>adres</th>
<th>postcode</th>
<th>woonplaats</th>
</tr>
<?php

$host = 'localhost';
$dbname = 'adreslijst';
$username = 'root';
$password = '';

$connectStr = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8';
$db = new PDO($connectStr, $username, $password);

$sql = "SELECT * FROM adressen2";
$sth = $db->prepare($sql);
$sth->execute();

while($row = $sth->fetch()) {
    echo "<tr>";
    $voornaam = $row["voornaam"];
    echo "<td>$voornaam</td>";
    $achternaam = $row["achternaam"];
    echo "<td>$achternaam</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>