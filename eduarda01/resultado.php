<html>
<head>
<title>Resultado</title>

<style>
body {
    background-color: #fff9c4; 
    font-family: Arial;
}

.caixa {
    background-color: white;
    width: 350px;
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

$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$idade = $_POST["idade"];
$sexo = $_POST["sexo"];

if ($idade > 18) {
    echo "Nome: $nome <br>";
    echo "Minha idade é: $idade <br>";
    echo "Sexo: $sexo <br>";
    echo "Endereço: $endereco";
}
else {
    echo "Menor de idade";
}

?>

</div>

</body>
</html>