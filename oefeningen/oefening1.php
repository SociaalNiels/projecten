<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <?php echo 'oefening 1<br>'; 
            echo 'dit zijn mijn oefeningen<br>';
            $name = 'Niels'; 
            $age  = 18; 
            $age10 = $age + 30; 
            $ageMinutes = $age * 365 * 24 * 60;
            $ageSeconds = $ageMinutes * 60;

            // optellen: +
            // aftrekken:-
            // vermenigvuldigen: *
            // delen: /
            echo "Deze regels zijn gemaakt met PHP";
            echo '<br>'; 
            echo "Groetjes van $name";
            // laat de volgende zin zien:
            // Ik heet <name en ik ben <age> jaar oud
            echo '<br>';
            echo "ik heet " . $name . ' en ik ben ' . $age . ' jaar oud.';
            echo '<br>';
            echo "ik heet $name en ik ben $age jaar oud"; 
            echo '<br>';
            echo "Over dertig jaar ben ik $age10 jaar oud"; 
            echo '<br>';
            echo "Mijn leeftijd in minuten is: $ageMinutes"; 
            echo '<br>';
            echo "Mijn leeftijd in seconden is: $ageSeconds";
            echo '<br>';

          ?>


</body>
</html>