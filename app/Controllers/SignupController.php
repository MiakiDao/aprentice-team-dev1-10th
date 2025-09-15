<?php

require_once __DIR__ . '/../Models/User.php'; //Userモデルを呼び出すため

class SignupController 
{
    public function store(): void
    {
        // 基本のサニタイズ/取得
        $email    = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';
        $name     = trim($_POST['name'] ?? '');
        
        // 作成（モデルに委譲）
        $newUserId = User::create($name, $email, $password);
        
        if ($newUserId) {
            // 登録成功したら setting ページへ
            header('Location: index.php?page=setting');
            exit;
        } else {
            // エラーなら signup に戻す
            header('Location: index.php?page=signup');
            exit;
        }
    }
}