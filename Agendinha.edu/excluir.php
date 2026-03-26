<?php
include('conexao.php');

$id = $_GET['id'];

$sql = "DELETE FROM contatos WHERE id = $id";

if (mysqli_query($conexao, $sql)) {
?>

<html>

<head>
<title>Excluir Contato</title>

<style>

body {
    font-family: 'Segoe UI', Arial, sans-serif;
    background-color: #f5f7fb;
    margin: 0;
}

h1 {
    text-align: center;
    padding: 25px;
    background-color: white;
    margin: 0;
    box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
    position: relative;
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
    from { width: 0; }
    to { width: 150px; }
}

.mensagem {
    background-color: white;
    width: 420px;
    margin: 40px auto;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0px 4px 12px rgba(0,0,0,0.08);
    text-align: center;
}

a {
    display: block;
    width: 100%;
    box-sizing: border-box;
    margin-top: 15px;
    padding: 12px;
    background-color: #4a90e2;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    text-align: center;
}

a:hover {
    background-color: #357abd;
}

</style>

</head>

<body>

<h1>Agenda - Turma 31</h1>

<div class="mensagem">
    <h2>Contato excluído com sucesso!</h2>
    <a href="index.php">Voltar</a>
</div>

</body>

</html>

<?php
} else {
    echo "Erro ao excluir.";
}
?>