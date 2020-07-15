<?php
require "inicia.php";

// armazena o codigo do livro a ser alterado
$cod_livro = isset($_GET['cod_livro']) ? (int) $_GET['cod_livro'] : null;
if (empty($cod_livro)) {
    echo "O código do livro para alteração não foi definido";
    exit;
}

// busca na tabela os dados do livro que deverá ser alterado
$PDO = conecta_bd();
$stmt = $PDO->prepare("SELECT cod_livro,titulo_livro,cod_isbn,autor_livro,nome_editora,qtd_paginas FROM livros 
    WHERE cod_livro = :cod_livro");
$stmt->bindParam(":cod_livro", $cod_livro, PDO::FETCH_ASSOC);
$stmt->execute();
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

// se o fetch acima não retornar um array preenchido, o codigo do livro não existe na tabela
if (!is_array($resultado)) {
    echo "Nenhum livro encontrado com o codigo informado";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
</head>

<body>
    <h2>Cadastro de Livros - Alteração</h2>
    <form action="altera.php" method="post">
        <label for="titulo_livro">Título: </label>
        <input type="text" name="titulo_livro" id="titulo_livro" value="<?=$resultado['titulo_livro']?>"><br><br>
        <label for="cod_isbn">ISBN: </label>
        <input type="text" name="cod_isbn" id="cod_isbn" value="<?=$resultado['cod_isbn']?>"><br><br>
        <label for="autor_livro">Autor: </label>
        <input type="text" name="autor_livro" id="autor_livro" value="<?=$resultado['autor_livro']?>"><br><br>
        <label for="nome_editora">Editora: </label>
        <input type="text" name="nome_editora" id="nome_editora" value="<?=$resultado['nome_editora']?>"><br><br>
        <label for="qtd_paginas">Qtd. Páginas: </label>
        <input type="text" name="qtd_paginas" id="qtd_paginas" value="<?=$resultado['qtd_paginas']?>"><br><br>
        <br>
        <input type="hidden" name="cod_livro" value="<?=$cod_livro?>">
        <input type="submit" value="Alterar">
    </form>
</body>

</html>