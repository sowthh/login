<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
  
</head>
 
<body>
    <div class="header">
        <h1>Login</h1>
    </div>
    <div class="container">
        <form action="login.php" method="POST">
            <label for="usuario">Usuário:</label>
            <input type="text" id="usuario" name="usuario" required><br>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required><br>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
 
