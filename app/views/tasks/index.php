<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="container">
    <div class="header">
        <div>
            <div class="title">Painel de Controle - ACQA</div>
            <div class="meta">Aluno: Vquintiliano · Sistemas de Informação</div>
        </div>
        <div>
            <nav>
                <a href="?p=tasks/create">Nova Tarefa</a>
                <a href="?p=logout">Sair</a>
            </nav>
        </div>
    </div>

    <h2>Bem vindo, <?php echo htmlspecialchars($user['name']); ?></h2>
    <p class="note">Aqui estão suas tarefas registradas. Este painel foi desenvolvido como exercício prático de arquitetura MVC e padrões de projeto.</p>

    <hr>
    <h3>Suas tarefas</h3>
    <?php if (empty($tasks)): ?>
        <p>Você não tem tarefas. Experimente adicionar uma nova tarefa para a disciplina.</p>
    <?php else: ?>
        <ul class="tasks">
        <?php foreach ($tasks as $t): ?>
            <li>
                <strong><?php echo htmlspecialchars($t['title']); ?></strong>
                <div><?php echo htmlspecialchars($t['description']); ?></div>
                <div class="task-actions">
                    <a href="?p=tasks/edit&id=<?php echo $t['id']; ?>">Editar</a>
                    <a href="?p=tasks/delete&id=<?php echo $t['id']; ?>" onclick="return confirm('Remover?')">Remover</a>
                </div>
            </li>
        <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <p class="footer">Material produzido por aluno do curso de Sistemas de Informação. Repositório: <a href="https://github.com/Vquintiliano/ACQA_API">Vquintiliano/ACQA_API</a></p>
</div>
</body>
</html>
