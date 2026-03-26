<?php
include('conexao.php');

$id = $_GET['id'];

$sql = "SELECT * FROM contatos WHERE id = $id";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) == 1) {
    $contato = mysqli_fetch_assoc($resultado);
} else {
    echo "Contato não encontrado.";
    exit;
}

if (isset($_POST['atualizar'])) {

    $novo_nome = $_POST['nome'];
    $novo_endereco = $_POST['endereco'];
    $novo_fone = $_POST['fone'];

    $sql2 = "UPDATE contatos SET nome='$novo_nome', endereco='$novo_endereco', 
    telefone='$novo_fone' WHERE id = $id";

    if (mysqli_query($conexao, $sql2)) {
        ?>
        <html>
        <head>
        <title>Atualizado</title>

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
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #4a90e2;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        a:hover {
            background-color: #357abd;
        }

        </style>

        </head>

        <body>

        <h1>Agenda - Turma 31</h1>

        <div class="mensagem">
            <h2>Contato foi atualizado com sucesso!</h2>
            <a href="index.php">Voltar</a>
        </div>

        </body>
        </html>

        <?php
        exit;

    } else {
        echo "Erro ao atualizar contato";
        exit;
    }
}
?>

<html>

<head>
<title>Editar Contato</title>

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

form {
    background-color: white;
    width: 420px;
    margin: 40px auto;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0px 4px 12px rgba(0,0,0,0.08);
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ddd;
}

input[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color: #4a90e2;
    color: white;
    border: none;
    border-radius: 8px;
}

.btn-voltar {
    display: block;
    width: 100%;
    box-sizing: border-box;
    text-align: center;
    margin-top: 10px;
    padding: 12px;
    background-color: #4a90e2;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    font-weight: 500;
}

.btn-voltar:hover {
    background-color: #357abd;
}
</style>

</head>

<body>

<h1>Agenda - Turma 31</h1>

<form method="POST">
    Nome: <input type="text" name="nome" value="<?php echo $contato['nome']; ?>"><br><br>
    Endereço: <input type="text" name="endereco" value="<?php echo $contato['endereco']; ?>"><br><br>
    Telefone: <input type="text" name="fone" value="<?php echo $contato['telefone']; ?>">
    <br><br>

  <input type="submit" name="atualizar" value="Atualizar">

<a href="index.php" class="btn-voltar">Voltar</a>
</form>

</body>

</html>