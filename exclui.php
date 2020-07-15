<?php
require_once 'inicia.php';

// armazena o codigo do livro a ser excluido
$cod_livro = isset($_GET['cod_livro']) ? $_GET['cod_livro'] : null;

// verifica se o codigo do livro existe na tabela
if (empty($cod_livro)) {
    echo "O código do livro para exclusão não foi definido.";
    exit;
}

// faz a exclusão do registro da tabela livros
$PDO = conecta_bd();
$sql = "DELETE FROM livros WHERE cod_livro = :cod_livro";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':cod_livro', $cod_livro, PDO::PARAM_INT);
if ($stmt->execute()) {
    header('Location: index.php');
} else {
    echo "Ocorreu um erro ao excluir o livro";
    print_r($stmt->errorInfo());
}