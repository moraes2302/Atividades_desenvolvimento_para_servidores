<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Login</h2>
        <form method="POST" action="processa.php">
            <input type="hidden" name="acao" value="login">
            <input type="text" name="usuario" placeholder="Usuário ou E-mail" required><br>
            <input type="password" name="senha" placeholder="Senha" required><br>
            <button type="submit">Entrar</button>
        </form>
        <a href="esqueceu_senha.php">Esqueci a Senha</a>
    </div>
</body>

</html>