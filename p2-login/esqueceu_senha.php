<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Recuperar Senha</h2>
        <form method="POST" action="processa.php">
            <input type="hidden" name="acao" value="recuperar">
            <input type="email" name="email" placeholder="E-mail de Cadastro" required><br>
            <button type="submit">Recuperar Senha</button>
        </form>
        <a href="index.php">Voltar ao Login</a>
    </div>
</body>

</html>