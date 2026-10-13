<?php
require_once __DIR__ . '/../core/Database.php';

class TaskRepository {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function allByUser($userId) {
        $stmt = $this->db->prepare('SELECT * FROM tasks WHERE user_id = :uid ORDER BY created_at DESC');
        $stmt->execute([':uid'=>$userId]);
        return $stmt->fetchAll();
    }

    public function create($userId, $title, $description) {
        $stmt = $this->db->prepare('INSERT INTO tasks (user_id, title, description, created_at) VALUES (:uid, :title, :desc, NOW())');
        return $stmt->execute([':uid'=>$userId, ':title'=>$title, ':desc'=>$description]);
    }

    public function find($id, $userId) {
        $stmt = $this->db->prepare('SELECT * FROM tasks WHERE id = :id AND user_id = :uid LIMIT 1');
        $stmt->execute([':id'=>$id, ':uid'=>$userId]);
        return $stmt->fetch();
    }

    public function update($id, $userId, $title, $description) {
        $stmt = $this->db->prepare('UPDATE tasks SET title = :title, description = :desc WHERE id = :id AND user_id = :uid');
        return $stmt->execute([':title'=>$title, ':desc'=>$description, ':id'=>$id, ':uid'=>$userId]);
    }

    public function delete($id, $userId) {
        $stmt = $this->db->prepare('DELETE FROM tasks WHERE id = :id AND user_id = :uid');
        return $stmt->execute([':id'=>$id, ':uid'=>$userId]);
    }
}
