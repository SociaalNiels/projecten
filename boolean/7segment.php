<?php
	$getal=$_GET["getal"];
	$a = !($getal==1) && !($getal==4);
	$b = ($getal==0) || ($getal==1) || ($getal==2) || ($getal==3) || ($getal==4) || ($getal==7) || ($getal==8) || ($getal==9);
	$c = !($getal==2);
	$d = ($getal==0) || ($getal==2) || ($getal==3) || ($getal==5) || ($getal==6) || ($getal==8) || ($getal==9);
	$e = ($getal%2==0) && !($getal==4);
	$f = ($getal==0) || ($getal==4) || ($getal==5) || ($getal==6) || ($getal==7) || ($getal==8) || ($getal==9);
	$g = ($getal>1) && !($getal==7);
?>

<form method="get" action="">
	<a href="?getal=<?php if ($getal>0) {echo $getal-1;} else {echo 0;}; ?>&display=display">down</a>
	<input type="number" value="<?php echo "$getal"; ?>" name="getal" min="0" max="9" style="text-align:right;">
	<input type="submit" value="display" name="display">
	<a href="?getal=<?php if ($getal<9) {echo $getal+1;} else {echo 9;}; ?>&display=display">up</a>
</form>

<?php
	if(isset($_GET["display"])) {
		echo "<table border='2' cellspacing='0' cellpadding='0'>";
			echo "<tr height=30><td bgcolor='black'>OO</td><td ";
			if ($a) { echo "style='color:red' bgcolor='red'"; } else { echo "bgcolor='black'"; }
			echo ">OOOOOOOOOOO</td><td bgcolor='black'>OO</td></tr>";
		echo "<tr height=100><td ";
		if ($f) { echo "style='color:red' bgcolor='red'"; } else { echo "bgcolor='black'"; }
		echo ">OO</td><td bgcolor='black'>OOOOOOOOOOO</td><td ";
		if ($b) { echo "style='color:red' bgcolor='red'"; } else { echo "bgcolor='black'"; }
		echo ">OO</td></tr>";
			echo "<tr height=30><td bgcolor='black'>OO</td><td ";
			if ($g) { echo "style='color:red' bgcolor='red'"; } else { echo "bgcolor='black'"; }
			echo ">OOOOOOOOOOO</td><td bgcolor='black'>OO</td></tr>";
		echo "<tr height=100><td ";
		if ($e) { echo "style='color:red' bgcolor='red'"; } else { echo "bgcolor='black'"; }
		echo ">OO</td><td bgcolor='black'>OOOOOOOOOOO</td><td ";
		if ($c) { echo "style='color:red' bgcolor='red'"; } else { echo "bgcolor='black'"; }
		echo ">OO</td></tr>";
			echo "<tr height=30><td bgcolor='black'>OO</td><td ";
			if ($d) { echo "style='color:red' bgcolor='red'"; } else { echo "bgcolor='black'"; }
			echo ">OOOOOOOOOOO</td><td bgcolor='black'>OO</td></tr>";
		echo "</table>";
	}
?>