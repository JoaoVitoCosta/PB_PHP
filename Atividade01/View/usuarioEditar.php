<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Tela Editar</title>
    </head>
    <body>
        <h2>Editar produtos</h2>
    
    <a href="/PB_PHP/Atividade01/usuario/listar">Ir para tela Listar</a>
        <form method="POST" action="atualizar?id=<?= $_GET['id']?>">
            <input type="text" name= "nomeDoProduto" value="<?=htmlspecialchars($usuarios['nomeDoProduto'])?>"require>
            <input type="text" name="valor" value="<?=htmlspecialchars($usuarios['valor'])?>" require>
            <input type="date" name="dataDeValidade" value="<?=htmlspecialchars($usuarios['dataDeValidade'])?>" require>
            <input type="number" name="quantidadeDisponivel" value="<?=htmlspecialchars($usuarios['quantidadeDisponivel'])?>" require>
            <button type="submit">Editar</button>
        </form>
    </body>
</html>