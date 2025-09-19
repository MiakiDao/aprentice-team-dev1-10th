<?php
require_once __DIR__ . '/../Models/user.php';

<<<<<<< HEAD
require_once __DIR__ . '/../Models/User.php';

=======
>>>>>>> origin/main
class SigninController
{
    public function authenticate()
    {
        // セッションを開始（ここを忘れると$_SESSIONが使えない）
        session_start();

        //フォームから送られてきた値を受け取る（空なら '' が入る）
        $email    = trim($_POST['email'] ?? '');
        $password = trim($_POST['password'] ?? '');
<<<<<<< HEAD
        //入力されたユーザー情報を照合（あったら$user=該当ユーザーの情報を持ってくる）
        $user = User::verify($email, $password);
=======
<<<<<<< HEAD

        //入力されたユーザー情報を照合（あったら$user=該当ユーザーの情報を持ってくる）
        $user = User::verify($email, $password);
=======
        $name     = trim($_POST['name'] ?? '');

        //入力されたユーザー情報を照合（あったら$user=該当ユーザーの情報を持ってくる）
        $user = User::verify($email, $password, $name);
>>>>>>> origin/main
>>>>>>> fb01f1d (Feature/migration (#32))

        if($user)
        {
<<<<<<< HEAD
            // ログイン成功したらユーザー情報をセッションに保存
            $_SESSION['user'] = $user;
=======
<<<<<<< HEAD
            // ログイン成功したらユーザー情報をセッションに保存
            $_SESSION['user'] = $user;
=======
>>>>>>> origin/main
>>>>>>> fb01f1d (Feature/migration (#32))
            header('Location: index.php?page=home');
            exit; //ここで明示的に処理終了
        } else {
            // 認証失敗ー＞エラーメッセージをセッションに保存
            $_SESSION['error'] = 'メールアドレスまたはパスワードが違います。';
            // ログイン画面へリダイレクト
            header('Location: index.php?page=login');
            exit;
        }
    }
}