<html>
<head>
<title>Nota do Exame</title>

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
    <h2>Calculadora de Exame</h2>

    <form method="POST" action="resultado-02.php">
        Média Final:<br>
        <input type="text" name="media"><br><br>
        <button type="submit">Calcular</button>
    </form>
</div>

</body>
</html>