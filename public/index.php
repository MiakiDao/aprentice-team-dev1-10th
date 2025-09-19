<?php

require_once __DIR__ . '/../app/Controllers/signupController.php';
require_once __DIR__ . '/../app/Controllers/signinController.php';


// ?page=xxx でどのページを表示　① どのページかを読み取る（リクエスト解析）
$page = $_GET['page'] ?? 'start';

// コンテナ内の絶対パス　② そのページに対応する実ファイルを決める（ルート解決）
$viewsPath = '/var/www/resources/views/';

// ページごとのファイルパス
switch ($page) {
    case 'create':
        $file = $viewsPath . 'set-login/create.php';
        break;

    // 新規登録ページPOST    
    case 'signup_store':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            (new signupController())->store();
            exit;
        } //elseで例外処理
        else {
            header('Location: /index.php?page=signup');
            exit;
        }

    case 'setting':
    $file = $viewsPath . 'set-login/setting.php';
    break;

    case 'login':
        $file = $viewsPath . 'set-login/login.php';
        break;
    // ログインページPOST
    case 'signin_verify':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            (new signinController())->authenticate();
            exit;
        } else {
            header('Location: /index.php?page=signin');
            exit;
        }
    case 'index':
        $file = $viewsPath . 'set-login/index.php';
        break;
    case 'start':
        $file = $viewsPath . 'start.html';
        break;
    case 'home':
        $file = $viewsPath . 'home/home.php';
        break;
    case 'home-setting':
        $file = $viewsPath . 'home/setting.php';
        break;
    case 'eat':
        $file = $viewsPath . 'input/eat_1.html';
        break;
    case 'menu':
        $file = $viewsPath . 'input/menu_1.html';
        break;
    default:
        $file = $viewsPath . 'start.html';
        break;
}

// ファイル存在確認
if (file_exists($file)) {
    require $file;
} else {
    echo "<p>❌ ページが見つかりません ページ指定が間違っています</p>";
}
