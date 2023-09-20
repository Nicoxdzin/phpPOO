<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/style.css">
    <title>Início</title>
</head>
<body>
    <div class="container">
        <div class="login-form">
            <form action="Process/processoLogin.php" method="POST">
                <div class="input-div">
                    <label for="usuario">Usuário</label>
                    <input type="text" class="form-input" name="user" id="user">
                </div>
                <div class="input-div">
                <label for="senha">Senha</label>
                    <input type="password" class="form-input" name="user-password" id="user-password">
                </div>
                <div class="input-div">
                    <input type="submit" class="form-sender" name="submit">
                </div>
                <div class="forgot-pass">
                    <a href="cadastro.php">Esqueceu sua senha?</a>
                </div>
            </form>
        </div>
    </div>    
</body>
</html>