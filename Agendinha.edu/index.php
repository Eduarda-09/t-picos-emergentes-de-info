<html>

<head>
<title>Contatos - Turma 31</title>

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

h2 {
    text-align: center;
    color: #333;
}

form {
    background-color: white;
    width: 420px;
    margin: 20px auto;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0px 4px 12px rgba(0,0,0,0.08);
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ddd;
    margin-top: 5px;
}

input[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color: #4a90e2;
    color: white;
    border: none;
    border-radius: 8px;
    font-weight: bold;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #357abd;
}

table {
    width: 80%;
    margin: 30px auto;
    border-collapse: collapse;
    background-color: white;
    box-shadow: 0px 4px 12px rgba(0,0,0,0.08);
    border-radius: 10px;
    overflow: hidden;
}

th {
    background-color: #4a90e2;
    color: white;
    padding: 12px;
}

td {
    padding: 12px;
    text-align: center;
}

tr:nth-child(even) {
    background-color: #f8f9fc;
}

a {
    color: #4a90e2;
    text-decoration: none;
    font-weight: bold;
}

a:hover {
    text-decoration: underline;
}

</style>

</head>

<body>
    <h1>Agenda - Turma 31</h1>
    <h2>Cadastro de contatos</h2>

    <form action="salvar.php" method="POST">
        Nome: <input type="text" name="nome"> <br><br>
        Endereço: <input type="text" name="endereco"><br><br>
        Telefone: <input type="text" name="fone"> <br><br>
        <input type="submit" value="Cadastrar">
    </form>

    <h2> Lista de contatos </h2>

<?php
include('conexao.php');
$sql = "SELECT * FROM contatos";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    echo "<table> 
    <tr>
    <th>Nome</th>
    <th>Endereço</th>
    <th>Telefone</th>
    <th>Ação</th>
    </tr>";

    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "<tr>
        <td>" . $linha['nome'] . "</td>
        <td>" . $linha['endereco'] . "</td>
        <td>" . $linha['telefone'] . "</td>
        <td>
        <a href='editar.php?id=" . $linha['id'] . "'>Editar</a> | 
        <a href='excluir.php?id=" . $linha['id'] . "' 
        onclick=\"return confirm('Tem certeza que deseja excluir?')\">
        Excluir
        </a>
        </td>
        </tr>";
    }

    echo "</table>";

} else {
    echo "<h3>Nenhum contato encontrado!</h3>";
}
?>

</body>

</html>