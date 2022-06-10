<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>lekker Lezen</title>
</head>
<body>
  <link type="text/css" rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"></link>

  <ul>
    <li><a style="font-size:40px" href="./index.php">HOME</a></li>
    <li><a style="font-size:40px" href="./boeken.php">BOEKEN</a></li>
    <li><a style="font-size:40px" href="./contact.php">CONTACT</a></li>
  </ul>
</div>
<div class="flexbox-container">
  <div class="flexbox-item fixed">
    <h1 style="text-align: center">lekker lezen</h1>
    <p>Info over wat lekker lezen is</p>
    <p>De top 10 boeken.</p>
    
    <?php
    $host = 'localhost';
    $dbname = 'boeken';
    $username = 'root';
    $password = '';

    $conStr = "mysql:host=$host;dbname=$dbname";
    $con = new PDO($conStr, $username, $password);

    $stmt = "SELECT * FROM boek";
    $sth = $con->prepare($stmt);
    $sth->execute();

    while($row = $sth->fetch()) {
      if ($row['bookrank'] <= 10) {
        echo '<button onclick="ToInfoPage()"></button><a href="books' . $row['location'] . '" class="textOverImage" data-title="' . $row['naam'] . '" data-text=" #' . $row['bookrank'] . ' Geschreven door ' . $row['schrijver'] . ' en uitgegeven op ' . $row['datum'] . '">';
        echo '<img src="' . $row['image'] . '" alt="Book" width="125" height="200">';
        echo '</a>';
      }
    }
    ?>
<div class="footer">
  <p><strong>Email: lekkerlezen@gmail.com Telefoonnummer: +31-655-5979-01</strong></p>
</div>




</body>
</html>