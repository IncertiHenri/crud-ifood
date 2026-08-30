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

<a href="public/formulario_cadastro_restaurante.php">Cadastrar restaurantes</a>
<a href="public/listagem_restaurantes.php">Verificar todos os restaurantes</a>
<a href="public/listagem_pedidos.php">Verificar todos os pedidos</a>
<a href="public/listagem_geral.php">Verificar todos os clientes, restaurantes e pedidos</a>

    <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Endereço</th>
                </tr>

    <?php

    include("infra/conexao.php");
    
    $sql = "SELECT * FROM clientes";

    $usuarios = $conn->query($sql);

    while ($usuario = mysqli_fetch_assoc($usuarios)) {
    ?>

                    <tr>
                        <td><?php echo $usuario["cliente_id"] ?></td>
                        <td><?php echo $usuario["nome"] ?></td>
                        <td><?php echo $usuario["telefone"] ?></td> 
                        <td><?php echo $usuario["email"] ?></td>
                        <td><?php echo $usuario["endereco"] ?></td>   
                        <td>
                            <a href="public/formulario_pedidos.php?id=<?php echo $usuario["id_cliente"] ?>">Fazer pedido</a>
                            <a href="public/pedidos_cliente.php?id=<?php echo $usuario["id_cliente"] ?>">Verificar pedidos do cliente</a>
                            <a href="public/editar_cliente.php?id=<?php echo $usuario["id_cliente"] ?>">Editar cliente</a>
                            <a href="public/excluir_cliente.php?id=<?php echo $usuario["id_cliente"] ?>">Excluir cliente</a>
                        </td>           
                    </tr>
    <?php } ?>


</body>
</html>