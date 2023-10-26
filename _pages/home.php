<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../_estilos/estilosHome.css">
</head>
<body>
    <div class="perfume-box">
        <form action="">
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
                    <input type="text" name="fragrancia" id="fragrancia" class="input-text" required>
                    <label for="fragrancia" class="input-label">Fragrância</label>
                </div>
                <br><br>
                <div class="input-container">
                    <input type="text" name="notasOlfativas" id="notasOlfativas" class="input-text" required>
                    <label for="notasOlfativas" class="input-label">Notas Olfativas</label>
                </div>
                <br><br>
                <div class="input-container">
                    <select id="genero" class="input-text" required>
                        <option selected disabled value="">Gênero</option>
                        <option>Masculino</option>
                        <option>Feminino</option>
                        <option>Unissex</option>
                    </select>
                </div>
                <br><br>
                <div class="input-container">
                    <select id="preco" class="input-text" required>
                        <option selected disabled value="">Preço</option>
                        <option>R$50</option>
                        <option>R$100</option>
                        <option>R$200</option>
                    </select>
                </div>
                <br><br>
                <div class="input-container">
                    <label><strong>Selecione o volume:</strong></label>
                    <br>
                    <label>
                        <input type="radio" name="volume" value="50ml" checked> 50ml
                    </label>
                    <label>
                        <input type="radio" name="volume" value="100ml"> 100ml
                    </label>
                    <label>
                        <input type="radio" name="volume" value="200ml"> 200ml
                    </label>
                </div>
                <br>
                <div class="input-container">
                    <label for="composicao" ><strong>Composição:</strong></label>
                    <textarea rows="6" style="width: 28em" id="composicao" name="composicao" class="input-text-2"></textarea>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit" class="submit-button">
            </fieldset>
        </form>
    </div>
</body>
</html>
