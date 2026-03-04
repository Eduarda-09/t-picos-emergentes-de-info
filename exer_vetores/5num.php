<?php

$numeros = [5, 10, 15, 20, 25];

unset($numeros[2]);

foreach ($numeros as $num) {
    echo $num . "<br>";
}

?>