<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo isset($task) ? 'Editar' : 'Nova'; ?> Tarefa</title>
</head>
<body>
<h2><?php echo isset($task) ? 'Editar' : 'Nova'; ?> Tarefa</h2>
<form method="post" action="?p=<?php echo isset($task) ? 'tasks/edit&id='.$task['id'] : 'tasks/create'; ?>">
    <label>Título: <input type="text" name="title" required value="<?php echo isset($task) ? htmlspecialchars($task['title']) : ''; ?>"></label><br>
    <label>Descrição: <textarea name="description"><?php echo isset($task) ? htmlspecialchars($task['description']) : ''; ?></textarea></label><br>
    <button type="submit"><?php echo isset($task) ? 'Atualizar' : 'Adicionar'; ?></button>
</form>
<p><a href="?p=tasks">Voltar</a></p>
</body>
</html>
