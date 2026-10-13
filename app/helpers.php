<?php
function redirect($path = '') {
    header('Location: ' . BASE_URL . '?p=' . ltrim($path, '/'));
    exit;
}

function isLogged() {
    return isset($_SESSION['user_id']);
}

function requireAuth() {
    if (!isLogged()) {
        redirect('login');
    }
}
