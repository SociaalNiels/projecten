<link rel="stylesheet" href="style.css?v=<?php echo time();?>">

<?php
$naam = $_POST['naam'];
$telefoonnummer = $_POST['telefoonnummer'];
$locatie = $_POST['locatie'];
$melding = $_POST['melding'];
$g = $_POST['gegevens'];
$random_var = rand(1,100);


if(empty($g)){
  echo "geef meer informatie!! <br>";
}
else{
  
  echo "MELDING $random_var,". date("Y/m/d") ."<br><br>";
  echo "$naam <br>";
  echo "telefoonnummer: $telefoonnummer <br>";
  echo "Locatie: $locatie <br>";
  echo "Melding: $melding <br>";


if (isset($_POST['spoed'])) {
  echo "spoed: ja <br>"; 
} else {
 echo "spoed: nee <br>"; 
  } 
}

$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
  echo "<a href='$url'>back</a>"; 

?>

