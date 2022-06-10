<?php

$word1 = $_POST["Woord1"];
$word2 = $_POST["Woord2"];
$word3 = $_POST["Woord3"];


echo "$word1 $word2 $word3 <br>";
echo "$word1 $word3 $word2 <br>";
echo "$word3 $word2 $word1 <br>";
echo "$word3 $word1 $word2 <br>";
echo "$word2 $word1 $word3 <br>";
echo "$word2 $word3 $word1 <br>";

