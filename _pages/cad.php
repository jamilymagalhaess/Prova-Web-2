<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de perfumes </title>
    <link rel="stylesheet" type="text/css" href="../_estilos/estilosCad.css">
</head>
<body>
    <div class="perfume-box">
        <form action="../_crudes/process_cadastro.php" method="post">
            <fieldset class="perfume-fieldset">
                <legend class="perfume-legend"><b>Fórmulário de Perfumes</b></legend>
                <br>
                <div class="input-container">
                    <input type="text" name="nome" id="nome" class="input-text" required>
                    <label for="nome" class="input-label">Nome</label>
                </div>
                <br><br>
                <div class="input-container">
                    <input type="text" name="marca" id="marca" class="input-text" required>
                    <label for="marca" class="input-label">Marca</label>
                </div>
                <br><br>
                <div class="input-container">
                <select name="IdCategoria" class="input-text" required>
                <option value="0">- selecione -</option>
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
                <br><br>
                <div class="input-container">
                    <input type="text" name="notasOlfativas" id="notasOlfativas" class="input-text" required>
                    <label for="notasOlfativas" class="input-label">Notas Olfativas</label>
                </div>
                <br><br>
                <div class="input-container">
                    <select name="genero" class="input-text" required>
                        <option selected disabled value="">Gênero</option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                        <option value="U">Unissex</option>
                    </select>
                </div>
                <br><br>
                <div class="input-container">
                    <select name="precinho" class="input-text" required>
                        <option selected disabled value="">Preço</option>
                        <option value="50">R$50</option>
                        <option value="100">R$100</option>
                        <option value="200">R$200</option>
                    </select>
                </div>

                <br><br>
                <div class="input-container">
                    <label><strong>Selecione o volume:</strong></label>
                    <br>
                    <label>
                        <input type="radio" name="volume" value="50.0" checked> 50ml
                    </label>
                    <label>
                        <input type="radio" name="volume" value="100.0"> 100ml
                    </label>
                    <label>
                        <input type="radio" name="volume" value="200.0"> 200ml
                    </label>
                </div>
                <br>
                <div class="input-container">
                    <label for="composicao" ><strong>Composição:</strong></label>
                    <textarea rows="6" style="width: 28em; color:blue;" id="composicao" name="composicao" class="input-text-2"></textarea>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit" class="submit-button">
            </fieldset>
        </form>
    </div>
</body>
</html>
