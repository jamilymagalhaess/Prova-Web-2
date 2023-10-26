
<?php
session_start();

require 'conexao.php'; // Inclui o arquivo de conexão

if ($_SERVER['REQUEST_METHOD'] == 'POST') {



$nome = $_POST['nome'];
$marca = $_POST['marca'];
$notasOlfativas = $_POST['notasOlfativas'];
$genero = $_POST['genero'];
$IdCategoriaPerfume = $_POST['IdCategoria'];
$preco = $_POST['precinho'];
$volume = $_POST['volume'];
$composicao = $_POST['composicao'];


$sql_insere = "INSERT INTO Perfume (nomePerfume, Marca, NotasOlfativas, Genero, IdCategoriaPerfume, Preco, Volume, Composicao) 
VALUES ('$nome', '$marca', '$notasOlfativas', '$genero', '$IdCategoriaPerfume', '$preco', '$volume', '$composicao')"; //reparem que essa linha é apenas uma string dentro de uma variável

$result = mysqli_query($conexao, $sql_insere);

if ($result !== false) {

    echo "<br />Registro inserido com sucesso!";
    header("Location: ../_pages/sucesso.php"); // Redireciona para a página de dashboard
    exit();

}
else {
    echo "<br />Erro inserindo registro: ".mysqli_error($conexao);
}



}

$conexao->close();



?>