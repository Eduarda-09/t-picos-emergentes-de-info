<?php

$frutas = ["Maçã", "Banana", "Uva", "Laranja", "Manga"];


echo $frutas[0] . "<br>";
echo $frutas[1] . "<br>";
echo $frutas[2] . "<br>";
echo $frutas[3] . "<br>";
echo $frutas[4] . "<br>";


$frutas[] = "Abacaxi";

echo "<br>Nova fruta adicionada:<br>";
echo $frutas[5];

?>