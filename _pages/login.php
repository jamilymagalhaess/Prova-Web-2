<!DOCTYPE html>
<html>
<head>
    <title>Tela de Login</title>
    <link rel="stylesheet" type="text/css" href="../_estilos/estilosLog.css">
</head>

<body>
    <div class="login">
        <h2>Login</h2>
        <form action="../_crudes/process_login.php" method="post">
            
            <fieldset class="grupo">
                <div class="campo">
                    
                    <input type="text" name="login" id="login" placeholder="Usuário" required>
                </div> 
                <div class="campo">   
                    <input type="password" name="senha" id="senha" placeholder="Senha" required>
                    <button class="botao" type="submit">Entrar</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>
