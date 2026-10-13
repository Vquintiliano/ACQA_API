<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo isset($task) ? 'Editar' : 'Nova'; ?> Tarefa</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<div class="container">
    <div class="header">
        <div>
            <div class="title"><?php echo isset($task) ? 'Editar Tarefa' : 'Nova Tarefa'; ?></div>
            <div class="meta">Aluno: Vquintiliano · Sistemas de Informação</div>
        </div>
        <div>
            <nav>
                <a href="?p=tasks">Voltar ao Painel</a>
            </nav>
        </div>
    </div>

    <h2><?php echo isset($task) ? 'Editar Tarefa' : 'Nova Tarefa'; ?></h2>

    <form method="post" action="?p=<?php echo isset($task) ? 'tasks/edit&id='.$task['id'] : 'tasks/create'; ?>">
        <label>Título
            <input type="text" name="title" required value="<?php echo isset($task) ? htmlspecialchars($task['title']) : ''; ?>">
        </label>
        <label>Descrição
            <textarea name="description"><?php echo isset($task) ? htmlspecialchars($task['description']) : ''; ?></textarea>
        </label>
        <button type="submit"><?php echo isset($task) ? 'Atualizar' : 'Adicionar'; ?></button>
    </form>

    <p class="footer">Tarefa registrada no contexto da disciplina. Mantenha os registros organizados para o relatório.</p>
</div>
</body>
</html>
