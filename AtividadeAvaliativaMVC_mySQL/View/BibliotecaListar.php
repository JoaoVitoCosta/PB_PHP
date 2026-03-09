<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista da Biblioteca</title>
</head>
<body>
    <h2>Usuários</h2>
    <a href="/PB_PHP/AtividadeAvaliativaMVC_mySQL/Biblioteca/telaCadastro">Ir para tela de cadastro</a>
    <header>
        <table border="1">
            <tr>
                <th>titulo</th>
                <th>autor</th>
                <th>anoPublicacao</th>
                <th>editora</th>
            </tr>
        <?php foreach ($Biblioteca as $id => $u):?>
            <tr>
                <td><?= $u['titulo'] ?></td>
                <td><?= $u['autor'] ?></td>
                <td><?= $u['anoPublicacao'] ?></td>
                <td><?= $u['editora'] ?></td>
                <td>
                    <a href= "/PB_PHP/AtividadeAvaliativaMVC_mySQL/Biblioteca/BibliotecaEditar?id=<?=$id ?>">Editar</a>
                    <a href="/PB_PHP/AtividadeAvaliativaMVC_mySQL/Biblioteca/BibliotecaExcluir?id=<?=$id ?> ">Excluir</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </header>
</body>
</html> 