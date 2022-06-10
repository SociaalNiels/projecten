<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="navigation.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
<title>Gezond Eten</title>
<link rel="shortcut icon" href="images/icon.ico">
</head>
<body>
 
		
 
 <div class="header">
	
 <ul>
 <div class="header">
  <?php include "includes/links.php";?>
  

  <a class="logo" href="./index.php"> <img src="gezondlogo.png" width="155" height="155"></a>
</ul>

<!-- partial:index.partial.html -->
<head>
  <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">
</head>
<body>
  <h3><b>B</b> <b>M</b> <b>I</b> Calculator</h3>
<form class="form" id="form" onsubmit="return validateForm()">
<div class="row-one">
  <input type="text" class="text-input" id="age" autocomplete="off" required/><p class="text">Age</p>
  <label class="container">
  <input type="radio" name="radio" id="f"><p class="text">Female</p>
    <span class="checkmark"></span>
  </label>
  <label class="container">
  <input type="radio" name="radio" id="m"><p class="text">Male</p>
    <span class="checkmark"></span>
  </label>
  </div>

<div class="row-two">
  <input type="text" class="text-input" id="height" autocomplete="off" required><p class="text">Height (cm)</p>
  <input type="text" class="text-input" id="weight" autocomplete="off" required><p class="text">Weight (kg)</p>
</div>
<button type="button" id="submit">Submit</button>
</form>



</body>
<!-- partial -->
<script  src="./script2.js"></script>





<div class="footer">
  <p>Copyright © 2020-2021</p>

</body>
</html>