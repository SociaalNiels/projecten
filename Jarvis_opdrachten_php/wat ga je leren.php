<?php

$informatie_php = "PHP (PHP: Hypertext Preprocessor) is een scripttaal, die bedoeld is om op webservers dynamische webpagina's te creëren. PHP is in 1994 ontworpen door Rasmus Lerdorf, een senior softwareontwikkelaar bij IBM. Lerdorf gebruikte Perl als inspiratie.";
$informatie_html = "HyperText Markup Language (afgekort HTML) is een op SGML gebaseerde opmaaktaal voor de specificatie van documenten, voornamelijk bedoeld voor het wereldwijde web. Het is de standaard opmaaktaal voor webpagina's. Documenten in HTML kunnen geopend en gelezen worden door een webbrowser om vervolgens als webpagina weergegeven te worden.";
$choice = readline("Waar wil je meer informatie over? (voer 'PHP' of 'HTML' in");

if ($choice == 'PHP') {
    echo $informatie_php;
}

if ($choice == 'HTML') {
    echo $informatie_html;
}

if ($choice !== 'HTML' || $choice !== 'PHP') {
    echo 'Je hebt geen juiste keuze gemaakt!';
}
