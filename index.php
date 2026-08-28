<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ifood</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

    <h1>Cadastro de clientes</h1>

    <form action="public/cadastro_cliente.php" method="POST">
        <label for="nome">Nome do cliente:</label>
        <input type="text" name="nome">
        <label for="fone">Telefone do cliente:</label>
        <input type="text" name="fone">
        <label for="email">E-mail do cliente:</label>
        <input type="email" name="email">
        <label for="end">Endereço do cliente:</label>
        <input type="text" name="end">
        <button type="submit">Cadastrar</button>
    </form>

</body>
</html>