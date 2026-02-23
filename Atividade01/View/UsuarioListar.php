<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
    <h2>Controle de Produtos</h2>
    <a href="/PB_PHP/Atividade01/usuario/telaCadastro">Ir para tela de cadastro </a>
    <header>
        <table border="1">
            <tr>
                <th>Nome</th>
                <th>Valor</th>
                <th>Validade</th>
                <th>Quantidade</th>
            </tr>
        <?php foreach ($usuarios as $u): ?>
            <tr>
                <td><?= $u['nomeDoProduto'] ?></td>
                <td><?= $u['valor'] ?></td>
                <td><?= $u['dataDeValidade'] ?></td>
                <td><?= $u['quantidadeDisponivel'] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </header>
</body>
</html>