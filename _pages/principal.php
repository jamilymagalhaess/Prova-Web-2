<!DOCTYPE html>
<html>

<head>
    <title>Tela Principal</title>
    <link rel="stylesheet" type="text/css" href="../_estilos/estilosPrinc.css">

</head>

<body>
    
    <?php include('cabecalho.php')?>


<div class="input-container">
    <table class="tabela-dados"> 
        <tr> 
            <th>Nome</th>
            <th>Marca</th> 
            <th>volume</th>
            <th>preco</th>
            <th>notas Olfativas</th>
            <th>genero</th>
            <th>Composicao</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>

        <tbody>
        
        <?php
                    session_start();
					require_once("../_crudes/conexao.php");
					
					$sql_menu = "SELECT * FROM perfume";
					
					$result = mysqli_query($conexao,$sql_menu);
					
					while ($perfume = mysqli_fetch_assoc($result)) {
						?>
                        <tr>
						    <td><?php echo $perfume['nomePerfume'] ?></td>
                            <td><?php echo $perfume['marca'] ?></td>
                            <td><?php echo $perfume['volume'] ?></td>
                            <td><?php echo $perfume['preco'] ?></td>
                            <td><?php echo $perfume['notasOlfativas'] ?></td>
                            <td><?php echo $perfume['genero'] ?></td>
                            <td><?php echo $perfume['Composicao'] ?></td>
                            
                            <?php if (isset($_SESSION ['autenticado']) && $_SESSION ['autenticado']){?>
                            <td><a method="POST" href="visualizar.php?id=<?php echo $perfume['IdPerfume']?>"><button>visualizar</button></a></td>
                            <td><a href="editar.php?id=<?php echo $perfume['IdPerfume']?>"><button>Editar</button></a></td>
                            <td><a href="../_crudes/process_excluir.php?id=<?php echo $perfume['IdPerfume']?>"><button>Excluir</button></a></td>
                            <?php }?>
						<tr>
                        <?php
					}
				?>
        </tbody>
    </table>
                
</div>
</body>


</html>
