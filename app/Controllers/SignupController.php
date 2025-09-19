<?php

require_once __DIR__ . '/../Models/user.php'; //Userモデルを呼び出すため

class SignupController 
{
    public function store(): void  //判定処理つけるか決める
    {
        // ユーザー入力の空白を取り除く
        $email    = trim($_POST['email'] ?? '');
        $password = trim($_POST['password'] ?? '');
        $name     = trim($_POST['name'] ?? '');
        
        // 作成（モデルを呼ぶ）
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