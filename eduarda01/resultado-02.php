<html>
<head>
<title>Resultado do Exame</title>

<style>
body {
    background-color: #fff9c4;
    font-family: Arial;
}

.caixa {
    background-color: white;
    width: 300px;
    margin: 150px auto;
    padding: 20px;
    text-align: center;
    border-radius: 10px;
    font-size: 18px;
}
</style>

</head>
<body>

<div class="caixa">

<?php

$media = $_POST["media"];

if ($media <= 1.7) {
    echo "Não pode realizar o exame";
}
else if ($media >= 7.0) {
    echo "APROVADO";
}
else {
    $nota_exame = (50 - (6 * $media)) / 4;
    echo "Precisa tirar no exame: $nota_exame";
}

?>

</div>

</body>
</html>