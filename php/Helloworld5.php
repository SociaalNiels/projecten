<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


$hello = array("hello", "world", "groetjes", "van", "NielsKenter");
echo $hello[0].$hello[1].",<br>".$hello[2].$hello[3].$hello[4]."<br><br>";

for ($i=0; $i < 10; $i++)
{
    echo "helloworld". "<br>";
}
foreach($hello as $waarden)
{
    echo $waarden;
}

$games = array("Prop and seek", "Pixel worlds", "brawhalla", "Minecraft", "Roblox", "WarzoneCOD", "fortnite", "coockie clickers", "overwatch" , "clash royale");

foreach($games as $waarden)
$i++;
{
    echo $i.".". $waarden. "<br>";
}

$y= 0;
for ($i=0; $i < 10; $i++) {
    $y = $i + 1;
    echo $y .".".$games[$i]."<br>";
}

$y = 0;
$i = 0;
while ($i < 10) {
    $y++;
    echo $y.".".$games[$i]."<br>";
    $i++;
}

    ?>
</body>
</html>