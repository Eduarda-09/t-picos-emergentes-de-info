<?php

$produto = [
    "nome" => "Gloss labial da Franciny",
    "preco" => 120,
    "estoque" => 15
];

foreach ($produto as $chave => $valor) {
    echo $chave . ": " . $valor . "<br>";
}

?>