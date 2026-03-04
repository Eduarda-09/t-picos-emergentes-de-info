<?php

$alunos = [
    ["nome" => "Isabelle", "nota" => 8],
    ["nome" => "Kauan", "nota" => 7],
    ["nome" => "Eduarda", "nota" => 9]
];


$soma = 0;

foreach ($alunos as $aluno) {
    $soma += $aluno["nota"];
}

$media = $soma / 3;

echo "Média da turma: " . $media . "<br><br>";


$maiorNota = 0;
$melhorAluno = "";

foreach ($alunos as $aluno) {
    if ($aluno["nota"] > $maiorNota) {
        $maiorNota = $aluno["nota"];
        $melhorAluno = $aluno["nome"];
    }
}

echo "Maior nota: " . $maiorNota . "<br>";
echo "Aluno com maior nota: " . $melhorAluno;

?>