<?php



function circle($radius, $color, $char){

    for($i = 0; $i <= 360; $i+=5) {
        $x = round(cos($i * pi() / 180) * $radius) + $radius;
        $y = round(sin($i * pi() / 180) * $radius) + $radius;

    echo "<span style='left: {$x}px; top: {$y}px;
        color:{$color}; position: absolute; '>{$char}</span>";
    }
}

circle(300, "blue", "🖕");
circle(150, "blue", "0");


