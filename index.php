<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/index.css">
    <title>Início</title>
</head>
<body>
    <div class="container">
        <div class="login-form">
            <form action="processoLogin.php" method="POST">
                <div class="input-div">
                    <label for="usuario">Usuário</label>
                    <input type="text" class="form-input" name="usuario" id="usuario">
                </div>
                <div class="input-div">
                <label for="senha">Senha</label>
                    <input type="text" class="form-input" name="senha" id="senha">
                </div>
                <div class="input-div">
                    <input type="submit" class="form-sender" name="submit">
                </div>
                <div class="forgot-pass">
                    <a href="">Esqueceu sua senha?</a>
                </div>
            </form>
        </div>
    </div>    
</body>
</html>