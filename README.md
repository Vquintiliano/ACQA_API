# ACQA_API - Projeto MVC PHP

Projeto de avaliação contínua (ACQA) usando PHP, MySQL e arquitetura MVC.

Funcionalidades:
- Cadastro e login de usuários (senhas com bcrypt)
- Dashboard com lista de tarefas do usuário logado
- CRUD de tarefas (criar, listar, editar, excluir)
- Padrões de projeto aplicados: Singleton (Database) e Repository (UserRepository / TaskRepository)

Instalação
1. Clone o repositório
2. Configure o banco de dados em `app/config.php`
3. Importe o arquivo `migrations/schema.sql` no seu MySQL
4. Aponte o DocumentRoot do servidor para a pasta `public/`
5. Acesse a aplicação pelo navegador

OBS: Coloque prints das telas (login, dashboard, adição de tarefa) e cole o link do repositório no campo "RESPOSTA DO ALUNO" conforme instruções da avaliação.

Conclusão (Exemplo de texto a incluir no campo RESPOSTA DO ALUNO):
Neste projeto implementei uma aplicação MVC em PHP com autenticação de usuários via bcrypt e persistência em MySQL. A arquitetura separa responsabilidades em controllers, models/repositories e views. A conexão com o banco usa o padrão Singleton para garantir uma única instância PDO, e os repositórios encapsulam a lógica de acesso a dados (Repository Pattern). A view é simples PHP/HTML sem frameworks para facilitar avaliação.
