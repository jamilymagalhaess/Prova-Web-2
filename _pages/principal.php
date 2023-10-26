<!DOCTYPE html>
<html>

<head>
    <title>Tela Principal</title>

</head>

<body>
<div class="input-container">
    <table> 
        <thead> parte de cima</thead>

        <tbody>

        <?php
					require_once("../_crudes/conexao.php");
					
					$sql_categoria = "SELECT * FROM categoriaperfume";
					
					$result = mysqli_query($conexao,$sql_categoria);
					
					while ($categoriaperfume = mysqli_fetch_assoc($result)) {
						?>
						<option value="<?php echo $categoriaperfume['IdCategoriaPerfume'] ?>"><?php echo $categoriaperfume['categoriaPerfumeNome'] ?></option>
						<?php
					}
				?>
                </select>
            </div>

        </tbody>

    </table>
                
</div>
</body>


</html>
