<?php
    $host = "localhost";
    $login = "root";
    $senha = "";
    $name = "perfumes_cheirosos";

	$conexao =  new mysqli($host,$login,$senha,$name);
    
    if($conexao->connect_errno)
    {
        echo "erro";
    }
    else
    {
        echo "Conexão efetuada com sucesso";
    }
?>