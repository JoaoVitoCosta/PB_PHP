<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Tela Editar</title>
    </head>
    <body>
        <h2>Editar usuários</h2>
    
    <a href="/PB_PHP/MDC.Exemplo/usuario/listar">Ir para tela Listar</a>
        <form method="POST" action="atualizar?id=<?= $_GET['id']?>">
            <input type="text" name= "id" value="<?=htmlspecialchars($_GET['id'])?>"disabled>
            <input type="text" name="nome" value="<?=htmlspecialchars($usuarios['nome'])?>" require>
            <input type="email" name="email" value="<?=htmlspecialchars($usuarios['email'])?>" require>
            <button type="submit">Editar</button>
        </form>
    </body>
</html>