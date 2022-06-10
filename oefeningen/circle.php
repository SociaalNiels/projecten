<?php
$radius = $_POST["radius"];
$color = $_POST["color"];
$char = $_POST["char"];


echo circle($radius, $color, $char);
function circle($radius, $color, $char){

    for($i = 0; $i <= 360; $i+=20) {
        $x = round(cos($i * pi() / 180) * $radius) + $radius;
        $y = round(sin($i * pi() / 180) * $radius) + $radius;

    echo "<span style='left: {$x}px; top: {$y}px;
        color:{$color}; position: absolute; '>{$char}</span>";
    }
}


