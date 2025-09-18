<?php
// ?page=xxx でどのページを表示　① どのページかを読み取る（リクエスト解析）
$page = $_GET['page'] ?? 'start';

// コンテナ内の絶対パス　② そのページに対応する実ファイルを決める（ルート解決）
$viewsPath = '/var/www/resources/views/';

// ページごとのファイルパス
switch ($page) {
    case 'create':
        $file = $viewsPath . 'set-login/create.php';
        break;
    case 'create2':
    $file = $viewsPath . 'set-login/create2.php';
    break;
    case 'login':
        $file = $viewsPath . 'set-login/login.php';
        break;
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
        $file = $viewsPath . 'input/eat.php';
        break;
    case 'menu':
        $file = $viewsPath . 'input/menu.php';
        break;
    default:
        $file = $viewsPath . 'start.html';
        break;
}

// ファイル存在確認
if (file_exists($file)) {
    require $file;
} else {
    echo "<p>❌ ページが見つかりません</p>";
}
