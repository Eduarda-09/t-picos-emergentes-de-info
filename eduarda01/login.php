<html>
<head>
<title>Login</title>

<style>
body {
    background-color: #fff9c4;
    font-family: Arial;
}

.formulario {
    background-color: white;
    width: 300px;
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
    <h2>Login</h2>

    <form method="POST" action="pag_protegida.php">
        Usuário:<br>
        <input type="text" name="usuario"><br>

        Senha:<br>
        <input type="password" name="senha"><br><br>

        <button type="submit">Entrar</button>
    </form>
</div>

</body>
</html>