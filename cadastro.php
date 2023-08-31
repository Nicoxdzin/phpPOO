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
            <form action="Process/processoLogin.php" method="POST">
                <div class="input-div">
                    <label for="usuario">Usuário</label>
                    <input type="text" class="form-input" name="user" id="user">
                </div>
                <div class="input-div">
                    <label for="usuario">Email</label>
                    <input type="email" class="form-input" name="email" id="email">
                </div>
                <div class="input-div">
                <label for="senha">Senha</label>
                    <input type="password" class="form-input" name="user-password" id="user-password">
                </div>
                <div class="input-div">
                <label for="confirm-senha">Confirmar senha</label>
                    <input type="password" class="form-input" name="confirm-password" id="confirm-password">
                </div>
                <div class="input-div">
                    <input type="submit" class="form-sender" name="submit">
                </div>
                <div class="forgot-pass">
                    <a href="login.php">Já cadastrado? Faça o Log in</a>
                </div>
            </form>
        </div>
    </div>    
    <script src="Styles/script.js"></script>
</body>
</html>