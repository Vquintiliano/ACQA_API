<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registrar</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="container">
    <div class="header">
        <div>
            <div class="title">ACQA - Registro de Aluno</div>
            <div class="meta">Aluno: Vquintiliano · Curso: Sistemas de Informação</div>
        </div>
        <div>
            <nav>
                <a href="?p=login">Login</a>
            </nav>
        </div>
    </div>

    <h2>Cadastro</h2>
    <?php if (!empty($error)) echo '<p class="note" style="color:#b91c1c">'.htmlspecialchars($error).'</p>'; ?>
    <form method="post" action="?p=register">
        <label>Nome
            <input type="text" name="name" required>
        </label>
        <label>Email
            <input type="email" name="email" required>
        </label>
        <label>Senha
            <input type="password" name="password" required>
        </label>
        <button type="submit">Registrar</button>
    </form>

    <p class="footer">Ao se registrar você aceita os termos de uso da disciplina.</p>
</div>
</body>
</html>
