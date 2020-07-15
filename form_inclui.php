<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Livros</title>
</head>
<body>
    <h2>Cadastro de Livros - Inclusão</h2>
    <form action="inclui.php" method="POST">
        <label for="titulo_livro">Título: </label>
        <input type="text" name="titulo_livro" id="titulo_livro"><br><br>
        <label for="cod_isbn">ISBN: </label>
        <input type="text" name="cod_isbn" id="cod_isbn"><br><br>
        <label for="autor_livro">Autor: </label>
        <input type="text" name="autor_livro" id="autor_livro"><br><br>
        <label for="nome_editora">Editora: </label>
        <input type="text" name="nome_editora" id="nome_editora"><br><br>
        <label for="qtd_paginas">Qtd. Páginas: </label>
        <input type="text" name="qtd_paginas" id="qtd_paginas"><br><br>
        <br>
        <input type="submit" value="Incluir">
    </form>
    <p><a href="index.php">Voltar ao inicio</a></p>
</body>
</html>