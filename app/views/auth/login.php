<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="container">
    <div class="header">
        <div>
            <div class="title">ACQA - Projeto MVC (Tarefas)</div>
            <div class="meta">Aluno: Vquintiliano · Curso: Sistemas de Informação</div>
        </div>
        <div>
            <nav>
                <a href="?p=login">Login</a>
                <a href="?p=register">Cadastro</a>
            </nav>
        </div>
    </div>

    <h2>Login</h2>
    <?php if (!empty($error)) echo '<p class="note" style="color:#b91c1c">'.htmlspecialchars($error).'</p>'; ?>
    <form method="post" action="?p=login">
        <label>Email
            <input type="email" name="email" required>
        </label>
        <label>Senha
            <input type="password" name="password" required>
        </label>
        <button type="submit">Entrar</button>
        <button type="button" class="secondary" onclick="location.href='?p=register'">Criar Conta</button>
    </form>

    <p class="footer">Este projeto faz parte da avaliação contínua (ACQA) - PHP, MySQL, MVC e Design Patterns.</p>
</div>
</body>
</html>
