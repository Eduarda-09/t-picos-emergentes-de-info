<html>
<head>
<title>Formulário</title>

<style>
body {
    background-color: #fff9c4; 
    font-family: Arial;
}

.formulario {
    background-color: white;
    width: 350px;
    margin: 150px auto;
    padding: 20px;
    text-align: center;
    border-radius: 10px;
}

input {
    width: 90%;
    padding: 8px;
    margin: 5px;
}

button {
    padding: 8px 15px;
    background-color: orange;
    border: none;
    cursor: pointer;
}
</style>

</head>
<body>

<div class="formulario">
    <h2>Informações Pessoais</h2>

    <form method="POST" action="resultado.php">
        Nome:<br>
        <input type="text" name="nome"><br>

        Endereço:<br>
        <input type="text" name="endereco"><br>

        Idade:<br>
        <input type="text" name="idade"><br><br>

        Sexo:<br>
        <input type="radio" name="sexo" value="Masculino"> Masculino<br>
        <input type="radio" name="sexo" value="Feminino"> Feminino<br><br>

        <button type="submit">Enviar</button>
    </form>
</div>

</body>
</html>