# ACQA_API - Projeto MVC PHP

Aluno: Vquintiliano
Curso: Sistemas de Informação
Disciplina: Aplicação para Internet / Avaliação Contínua (ACQA)

Descrição
Este projeto é uma implementação didática de um sistema de tarefas em PHP utilizando a arquitetura MVC e MySQL. O objetivo é demonstrar conhecimentos práticos sobre roteamento, controllers, separação de responsabilidades, persistência e aplicação de padrões de projeto.

Funcionalidades implementadas
- Cadastro e login de usuários (senhas protegidas com bcrypt)
- Dashboard com lista de tarefas do usuário autenticado
- CRUD completo para tarefas (criar, listar, editar, remover)
- Arquitetura MVC com controllers, repositories e views
- Padrões: Singleton (Database) e Repository (UserRepository, TaskRepository)

Instalação e execução
1. Clone o repositório
2. Ajuste as credenciais do banco em `app/config.php`
3. Importe o arquivo `migrations/schema.sql` no MySQL
4. Aponte o DocumentRoot do servidor para a pasta `public/`
5. Acesse pelo navegador: `http://localhost/ACQA_API/public/?p=login`

Observações do aluno
Durante o desenvolvimento, procurei seguir as boas práticas básicas observadas na disciplina de Sistemas de Informação:
- Separação de responsabilidades: a camada de acesso a dados fica nos repositórios, a lógica de requisição nas controllers e a visualização nas views.
- Segurança: as senhas são armazenadas com hash bcrypt e o acesso às rotas de tarefas exige autenticação.
- Manutenibilidade: a conexão com o banco usa o padrão Singleton para facilitar a troca de configuração em apenas um ponto.
