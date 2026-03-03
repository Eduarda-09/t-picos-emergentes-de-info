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
    width: 300px;
    margin: 150px auto;
    padding: 20px;
    text-align: center;
    border-radius: 10px;
}
</style>

</head>
<body>

<div class="caixa">

<?php

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if ($usuario == "admin" && $senha == "1234") {
    echo "Bem-vindo Admin!"; 
}
else {
    echo "Usuário ou senha incorretos";
}

?>

</div>

</body>
</html>