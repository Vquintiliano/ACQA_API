<?php
require_once APP_ROOT . '/core/Controller.php';
require_once APP_ROOT . '/models/UserRepository.php';

class AuthController extends Controller {
    private $users;

    public function __construct() {
        $this->users = new UserRepository();
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $pass = $_POST['password'];

            if ($this->users->findByEmail($email)) {
                $error = 'Email já cadastrado';
                $this->view('auth/register', ['error'=>$error]);
                return;
            }

            $hash = password_hash($pass, PASSWORD_BCRYPT);
            $uid = $this->users->create($name, $email, $hash);
            $_SESSION['user_id'] = $uid;
            redirect('tasks');
        }

        $this->view('auth/register');
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email']);
            $pass = $_POST['password'];
            $user = $this->users->findByEmail($email);
            if ($user && password_verify($pass, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                redirect('tasks');
            } else {
                $error = 'Credenciais inválidas';
                $this->view('auth/login', ['error'=>$error]);
                return;
            }
        }
        $this->view('auth/login');
    }

    public function logout() {
        session_destroy();
        redirect('login');
    }
}
