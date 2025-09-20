<?php
require_once '/var/www/app/Controllers/signupController.php';
require_once '/var/www/app/Controllers/signinController.php';

require_once '/var/www/app/Controllers/settingController.php';
require_once '/var/www/app/Controllers/signoutController.php';

require_once '/var/www/app/Controllers/homesettingController.php';


// ?page=xxx でどのページを表示　① どのページかを読み取る（リクエスト解析）
$page = $_GET['page'] ?? 'start';

// コンテナ内の絶対パス　② そのページに対応する実ファイルを決める（ルート解決）
$viewsPath = '/var/www/resources/views/';

// ページごとのファイルパス
switch ($page) {
    // 新規登録ページGET
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

    //理想体型・身長・体重登録ページGET
    case 'setting':
    $file = $viewsPath . 'set-login/setting.php';
    break;

    //理想体型・身長・体重登録ページPOST
    case 'setting_store':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            (new settingController())->store();
            exit;
        } //elseで例外処理
        else {
            header('Location: /index.php?page=setting');
            exit;
        }

    //　ログインページGET
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
    
    // ユーザー情報再設定ページGET
    case 'home-setting':
        $file = $viewsPath . 'home/setting_1.php';
        (new HomeSettingController())->show();
        exit;

    // ユーザ情報再設定ページPOST
    case 'home_setting_update': 
        (new HomeSettingController())->update();
        break;
    case 'eat':
        $file = $viewsPath . 'input/eat_1.html';
        break;
    case 'menu':
        $file = $viewsPath . 'input/menu_1.html';
        break;
    case 'signout':
        $controller = new SignoutController;
        $controller->logout();
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

