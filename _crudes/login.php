<?php
require 'conexao.php'; // Inclui o arquivo de conexão

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // Consulta para verificar as credenciais
    $sql = "SELECT * FROM usuario WHERE Login = '$login' AND Senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // As credenciais estão corretas, o usuário está autenticado
        header("Location: dashboard.php"); // Redireciona para a página de dashboard
        exit();
    } else {
        
        $erro = "Usuário ou senha incorretos.";
    }
}

$conn->close();
?>
