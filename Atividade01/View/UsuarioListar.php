<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
    <h2>Produtos</h2>
    <a href="/PB_PHP/Atividade01/usuario/telaCadastro">Ir para tela de cadastro de produtos</a>
    <header>
        <table border="1">
            <tr>
                <th>Nome Do Produto</th>
                <th>Valor do Produto</th>
                <th>Data de Validade</th>
                <th>Quantidade Disponível</th>
                <th>

            </tr>
        <?php foreach ($usuarios as $id => $u):?>
            <tr>
                <td><?= $u['nomeDoProduto'] ?></td>
                <td><?= $u['valor'] ?></td>
                <td><?= $u['dataDeValidade'] ?></td>
                <td><?= $u['quantidadeDisponivel'] ?></td>

                <td>
                    <a href= "/PB_PHP/Atividade01/usuario/telaEditar?id=<?=$id ?>">Editar</a>
                    <a href="/PB_PHP/Atividade01/usuario/excluir?id=<?=$id ?> ">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </header>
</body>
</html>