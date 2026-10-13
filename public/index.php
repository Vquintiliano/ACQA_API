<?php
// front controller
require_once __DIR__ . '/../app/config.php';
require_once APP_ROOT . '/helpers.php';

session_start();

$url = isset($_GET['p']) ? rtrim($_GET['p'], '/') : '';

switch ($url) {
    case 'register':
        require APP_ROOT . '/controllers/AuthController.php';
        $c = new AuthController();
        $c->register();
        break;
    case 'login':
        require APP_ROOT . '/controllers/AuthController.php';
        $c = new AuthController();
        $c->login();
        break;
    case 'logout':
        require APP_ROOT . '/controllers/AuthController.php';
        $c = new AuthController();
        $c->logout();
        break;
    case 'tasks/create':
        require APP_ROOT . '/controllers/TaskController.php';
        $c = new TaskController();
        $c->create();
        break;
    case 'tasks/edit':
        require APP_ROOT . '/controllers/TaskController.php';
        $c = new TaskController();
        $c->edit();
        break;
    case 'tasks/delete':
        require APP_ROOT . '/controllers/TaskController.php';
        $c = new TaskController();
        $c->delete();
        break;
    case 'tasks':
    case '':
        require APP_ROOT . '/controllers/TaskController.php';
        $c = new TaskController();
        $c->index();
        break;
    default:
        http_response_code(404);
        echo "Página não encontrada";
}
