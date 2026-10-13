<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
</head>
<body>
<h2>Dashboard - Bem vindo, <?php echo htmlspecialchars($user['name']); ?></h2>
<p><a href="?p=tasks/create">Adicionar tarefa</a> | <a href="?p=logout">Sair</a></p>
<hr>
<h3>Suas tarefas</h3>
<?php if (empty($tasks)): ?>
    <p>Você não tem tarefas.</p>
<?php else: ?>
    <ul>
    <?php foreach ($tasks as $t): ?>
        <li>
            <strong><?php echo htmlspecialchars($t['title']); ?></strong>
            - <?php echo htmlspecialchars($t['description']); ?>
            [<a href="?p=tasks/edit&id=<?php echo $t['id']; ?>">editar</a>]
            [<a href="?p=tasks/delete&id=<?php echo $t['id']; ?>" onclick="return confirm('Remover?')">remover</a>]
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>
</body>
</html>
