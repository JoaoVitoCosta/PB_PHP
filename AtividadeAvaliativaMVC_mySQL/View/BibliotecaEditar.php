<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Tela Editar</title>
    </head>
    <body>
        <h2>Editar Biblioteca</h2>
    
    <a href="/PB_PHP/AtividadeAvaliativaMVC_mySQL/Biblioteca/BibliotecaListar">Ir para tela Listar</a>
        <form method="POST" action="atualizar?id=<?= $_GET['id']?>">
            <input type="text" name= "id" value="<?=htmlspecialchars($_GET['id'])?>"disabled>
            <input type="text" name="titulo" value="<?=htmlspecialchars($Biblioteca['titulo'])?>" require>
            <input type="text" name="autor" value="<?=htmlspecialchars($Biblioteca['autor'])?>" require>
            <input type="date" name= "anoPublicacao" value="<?=htmlspecialchars($Biblioteca['anoPublicacao'])?>"require>
            <input type="text" name="editora" value="<?=htmlspecialchars($Biblioteca['editora'])?>" require>
            <button type="submit">Editar</button>
        </form>
    </body>
</html>