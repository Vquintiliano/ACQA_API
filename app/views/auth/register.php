<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registrar</title>
</head>
<body>
<h2>Registrar</h2>
<?php if (!empty($error)) echo '<p style="color:red">'.htmlspecialchars($error).'</p>'; ?>
<form method="post" action="?p=register">
    <label>Nome: <input type="text" name="name" required></label><br>
    <label>Email: <input type="email" name="email" required></label><br>
    <label>Senha: <input type="password" name="password" required></label><br>
    <button type="submit">Registrar</button>
</form>
<p>Já tem conta? <a href="?p=login">Entrar</a></p>
</body>
</html>
