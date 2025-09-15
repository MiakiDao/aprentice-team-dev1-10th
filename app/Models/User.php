<?php

require_once __DIR__ . '/../../config/db.php'; // config/db.phpを呼び出している

class User
{
    public static function create(string $name, string $email, string $password)
    {
        $pdo = DB::conn();

        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = 'INSERT INTO users (user_name, email, password) VALUES (?, ?, ?)';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name, $email, $hash]);

        return (int)$pdo->lastInsertId();
    }
}