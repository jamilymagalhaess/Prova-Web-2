
<?php
session_start();
require 'conexao.php'; // Inclui o arquivo de conexão

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // Use instruções preparadas para evitar injeção de SQL
    $stmt = $conexao->prepare("SELECT * FROM usuario WHERE loginUsuario = ? AND senhaUsuario = ?");
    
    if ($stmt) {
        $stmt->bind_param("ss", $login, $senha);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // As credenciais estão corretas, o usuário está autenticado
            $_SESSION['autenticado'] = true;
            header("Location: ../_pages/cad.php"); // Redireciona para a página de dashboard
            exit();
        } else {
            $erro = "Usuário ou senha incorretos.";
            header("Location: ../_pages/login.php");
        }

        $stmt->close();
    } else {
        die("Erro na preparação da consulta SQL: " . $conexao->error);
    }
}

$conexao->close();
?>