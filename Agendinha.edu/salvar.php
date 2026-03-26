<html>

<head>
<title>Salvar Contato</title>

<style>

body {
    font-family: 'Segoe UI', Arial, sans-serif;
    background-color: #f5f7fb;
    margin: 0;
}

/* Título com linha animada */
h1 {
    text-align: center;
    padding: 25px;
    background-color: white;
    margin: 0;
    box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
    position: relative;
    font-weight: 600;
    letter-spacing: 1px;
}

h1::after {
    content: "";
    width: 0;
    height: 3px;
    background: #4a90e2;
    position: absolute;
    left: 50%;
    bottom: 10px;
    transform: translateX(-50%);
    animation: linha 1.5s ease forwards;
}

@keyframes linha {
    from {
        width: 0;
    }
    to {
        width: 150px;
    }
}

/* Caixa central */
.container {
    background-color: white;
    width: 420px;
    margin: 40px auto;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0px 4px 12px rgba(0,0,0,0.08);
    text-align: center;
}

/* Texto */
h2 {
    color: #333;
    font-weight: 500;
}

/* Botão */
a {
    display: inline-block;
    margin-top: 25px;
    padding: 12px 25px;
    background-color: #4a90e2;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    font-weight: 500;
    transition: 0.3s;
}

a:hover {
    background-color: #357abd;
}

</style>

</head>

<body>

<h1>Agenda - Turma 31</h1>

<div class="container">

<?php

include('conexao.php');

if(isset($_POST['nome'])){

$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$fone = $_POST['fone'];

$sql = "INSERT INTO contatos (nome, endereco, telefone) 
         VALUES ('$nome', '$endereco', '$fone')";

if (mysqli_query($conexao, $sql)) {
    echo "<h2>Cadastro realizado com sucesso</h2>";
    echo "<a href='index.php'>Voltar</a>";
} else {
    echo "<h2>Erro ao salvar o contato</h2>" . mysqli_error($conexao);
    echo "<a href='index.php'>Voltar</a>";
}

}else{
    echo "<h2>Acesso inválido</h2>";
    echo "<a href='index.php'>Voltar</a>";
}

?>

</div>

</body>

</html>