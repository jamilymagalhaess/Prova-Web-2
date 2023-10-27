
<?php
session_start();

require 'conexao.php'; // Inclui o arquivo de conexão

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

$idPerfume = $_GET['id'];
echo $_GET['id'];
$sql_insere = "DELETE FROM Perfume WHERE idPerfume = '$idPerfume'"; 

$result = mysqli_query($conexao, $sql_insere);

if ($result !== false) {

    echo "<br />Registro excluido com sucesso!";
    header("Location: ../_pages/sucesso.php"); 
    exit();

}

else {
    echo "<br />Erro excluindo registro: ".mysqli_error($conexao);
}



}

$conexao->close();



?>