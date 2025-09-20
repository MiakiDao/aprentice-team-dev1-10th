<?php
// require_once __DIR__ . '/../app/Controllers/settingController.php';
// require_once __DIR__ . '/../app/Controllers/signinController.php';
// require_once __DIR__ . '/../app/Controllers/SignoutController.php';
// require_once __DIR__ . '/../app/Controllers/HomeSettingController.php';
// require_once __DIR__ . '/../app/Controllers/menuController.php';
// require_once __DIR__ . '/../app/Controllers/homeController.php';

// ① page取得
$page = $_GET['page'] ?? 'start';

// ② ビュー基点パス（Dockerの実パス）
$viewsPath = '/var/www/resources/views/';

// ③ ルーティング
switch ($page) {

  case 'create':
    $file = $viewsPath . 'set-login/create.php';
    break;

  case 'create2':
    $file = $viewsPath . 'set-login/create2.php';
    break;

  case 'create2_store':
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      header('Location: /index.php?page=home');
      exit;
    } else {
      header('Location: /index.php?page=create2');
      exit;
    }

  case 'signup_store':
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      header('Location: /index.php?page=create2');
      exit;
    } else {
      header('Location: /index.php?page=create');
      exit;
    }

  // ユーザー登録（設定）ページ GET
  case 'setting':
    $file = $viewsPath . 'home/setting.php';
    break;
    switch ($page) {
    case 'setting':
        $file = $viewsPath . 'home/setting.php';
        break;
    case 'eat':
        $file = $viewsPath . 'input/eat.php';
        break;
    case 'menu':
        $file = $viewsPath . 'input/menu.php';
        break;
    case 'home':
        $file = $viewsPath . 'home/home.php';
        break;
    default:
        $file = $viewsPath . 'set-login/login.php';
    }

  // 設定 POST
  case 'setting_store':
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      (new settingController())->store();
      exit;
    } else {
      header('Location: /index.php?page=setting');
      exit;
    }

  // ログイン GET
  case 'login':
    $file = $viewsPath . 'set-login/login.php';
    break;

  // ログイン POST
  case 'signin_verify':
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      (new signinController())->authenticate();
      exit;
    } else {
      header('Location: /index.php?page=login');
      exit;
    }

  case 'index':
    $file = $viewsPath . 'set-login/index.php';
    break;

  case 'start':
    $file = $viewsPath . 'start.html';
    break;

  case 'home':
    $file = $viewsPath . 'set-login/home.php';
    break;

  case 'home-setting':
    (new HomeSettingController())->show();
    exit;

  case 'home_setting_update':
    (new HomeSettingController())->update();
    exit;

  case 'eat':
    $file = $viewsPath . 'input/eat.php';
    break;

  case 'menu':
    $file = $viewsPath . 'input/menu.php';
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
    case 'home':
        $file = $viewsPath . 'set-login/home.php';
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
        $file = $viewsPath . 'input/eat_1.php';
        break;
    case 'menu':
        $file = $viewsPath . 'input/menu.php';
        break;
    case 'signout':
        $controller = new SignoutController;
        $controller->logout();
        break;
    default:
        $file = $viewsPath . 'start.html';
        break;
}

echo "<!-- DEBUG view=$file page=$page -->";
if (is_file($file)) {
  require $file;
} else {
  http_response_code(404);
  echo "<p>❌ ページが見つかりません: {$file}</p>";
}
