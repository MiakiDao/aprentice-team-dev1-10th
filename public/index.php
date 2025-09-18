<?php

require_once __DIR__ . '/../app/Controllers/SignupController.php';
require_once __DIR__ . '/../app/Controllers/SigninController.php';

// ?page=xxx でどのページを表示
$page = $_GET['page'] ?? 'index';

// コンテナ内の絶対パス
$viewsPath = '/var/www/resources/views/';

// ページごとのファイルパス
switch ($page) {
    case 'signup':
        $file = $viewsPath . 'set-login/signup.php';
        break;
    // 新規登録ページPOST    
    case 'signup_store':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            (new SignupController())->store();
            exit;
        } //elseで例外処理
         else {
            header('Location: /index.php?page=signup');
            exit;
        }
        break;
    case 'login':
        $file = $viewsPath . 'set-login/login.php';
        break;
    // ログインページPOST
    case 'signin_verify':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            (new SigninController())->authenticate();
            exit;
            } 
             else {
                header('Location: /index.php?page=signin');
                exit;
                }
    case 'index':
        $file = $viewsPath . 'set-login/index.php';
        break;
    case 'setting':
        $file = $viewsPath . 'set-login/setting.php';
        break;
    case 'home':
        $file = $viewsPath . 'home/home.php';
        break;
    case 'home-setting':
        $file = $viewsPath . 'home/setting.php';
        break;
    
    case 'eat':
        $file = $viewsPath . 'input/eat.php';
        break;
    case 'menu':
        $file = $viewsPath . 'input/menu.php';
        break;
    default:
        $file = $viewsPath . 'set-login/index.php';
        break;
}

// ファイル存在確認
if (file_exists($file)) {
    require $file;
} else {
    echo "<p>❌ ページが見つかりません</p>";
}
