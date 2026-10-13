<?php
class Controller {
    protected function view($path, $data = []) {
        extract($data);
        require APP_ROOT . '/views/' . $path . '.php';
    }
}
