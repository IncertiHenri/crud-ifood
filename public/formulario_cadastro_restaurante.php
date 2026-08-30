<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário cadastro de restaurantes</title>
</head>
<body>

    <h1>Cadastro de restaurantes</h1>

    <form action="cadastro_restaurante.php" method="POST">
        <label for="nome">Nome do restaurante:</label>
        <input type="text" name="nome">
        <label for="cat">Categoria do restaurante:</label>
        <input type="text" name="cat">
        <label for="fone">Telefone do restaurante:</label>
        <input type="text" name="fone">
        <label for="end">Endereço do restaurante:</label>
        <input type="text" name="end">
        <button type="submit">Cadastrar</button>
    </form>

</body>
</html>