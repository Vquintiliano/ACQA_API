<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>
<body>
<h2>Login</h2>
<?php if (!empty($error)) echo '<p style="color:red">'.htmlspecialchars($error).'</p>'; ?>
<form method="post" action="?p=login">
    <label>Email: <input type="email" name="email" required></label><br>
    <label>Senha: <input type="password" name="password" required></label><br>
    <button type="submit">Entrar</button>
</form>
<p>Não tem conta? <a href="?p=register">Registre-se</a></p>
</body>
</html>
