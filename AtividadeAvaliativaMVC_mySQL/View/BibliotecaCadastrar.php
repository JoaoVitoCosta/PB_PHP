<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Formulário Cadastro dos Livros</title>
    </head>
    <body>
        <a href="/PB_PHP/AtividadeAvaliativaMVC_mySQL/Biblioteca/BibliotecaListar">Ir para tela Listar</a>
        <form method="POST" action="salvar">
            <input type="text" name="titulo" placeholder="Título do livro" require>
            <input type="text" name="autor" placeholder="Autor do livro" require>
            <input type="date" name="anoPublicacao" placeholder="Data em que foi publicado" require>
            <input type="text" name="editora" placeholder="Editora" require>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>
