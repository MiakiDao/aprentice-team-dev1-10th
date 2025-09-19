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

    public static function verify(string $email, string $password)
    {
        $pdo = DB::conn();

        // ユーザーを取得
        $stmt = $pdo->prepare('SELECT * FROM users WHERE email = ? LIMIT 1');
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

    
        // ユーザーが存在し、パスワードが正しいか確認(password_verify=ハッシュを解釈して、平文パスワードを同じ条件でハッシュ化して比較する関数)
        if ($user && password_verify($password, $user['password'])) {
            return $user; // 成功時はユーザー情報を返す
        }
        return null; // 失敗時はnull
    }
}