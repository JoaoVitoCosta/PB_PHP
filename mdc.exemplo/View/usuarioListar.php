<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
    <h2>Usuários</h2>
    <a href="/PB_PHP/MDC.Exemplo/usuario/telaCadastro">Ir para tela de cadastro</a>
    <header>
        <table border="1">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        <?php foreach ($usuarios as $u): ?>
            <tr>
                <td><?= $u['nome'] ?></td>
                <td><?= $u['email'] ?></td>
                <td>próxima aula</td>
            </tr>
            <?php endforeach; ?>
        </table>
    </header>
</body>
</html>