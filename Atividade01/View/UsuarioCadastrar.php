<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Formulário Cadastro</title>
    </head>
    <body>
        <a href="/PB_PHP/Atividade01/usuario/listar">Ir para tela de produtos cadastrados</a>
        <form method="POST" action="salvar">
            <input type="text" name="nomeDoProduto" placeholder="Nome do produto" require>
            <input type="text" name="valor" placeholder="Valor do Produto" require>
            <input type="date" name="dataDeValidade" placeholder="Data De Validade" require>
            <input type="number" name="quantidadeDisponivel" placeholder="Quantidade Disponível" require>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>

