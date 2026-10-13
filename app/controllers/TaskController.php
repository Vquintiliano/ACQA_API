<?php
require_once APP_ROOT . '/core/Controller.php';
require_once APP_ROOT . '/models/TaskRepository.php';
require_once APP_ROOT . '/models/UserRepository.php';

class TaskController extends Controller {
    private $tasks;
    private $users;

    public function __construct() {
        $this->tasks = new TaskRepository();
        $this->users = new UserRepository();
    }

    public function index() {
        requireAuth();
        $user = $this->users->findById($_SESSION['user_id']);
        $tasks = $this->tasks->allByUser($user['id']);
        $this->view('tasks/index', ['user'=>$user, 'tasks'=>$tasks]);
    }

    public function create() {
        requireAuth();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = trim($_POST['title']);
            $desc = trim($_POST['description']);
            $this->tasks->create($_SESSION['user_id'], $title, $desc);
            redirect('tasks');
        }
        $this->view('tasks/create');
    }

    public function edit() {
        requireAuth();
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $task = $this->tasks->find($id, $_SESSION['user_id']);
        if (!$task) { redirect('tasks'); }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->tasks->update($id, $_SESSION['user_id'], trim($_POST['title']), trim($_POST['description']));
            redirect('tasks');
        }

        $this->view('tasks/create', ['task'=>$task]);
    }

    public function delete() {
        requireAuth();
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $this->tasks->delete($id, $_SESSION['user_id']);
        redirect('tasks');
    }
}
