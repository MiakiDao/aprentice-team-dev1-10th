<?php
session_start();

$error = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email    = trim($_POST['email'] ?? '');
  $password = $_POST['password'] ?? '';

  // まずは仮の認証（あとでDB照合に置き換え）
  $validEmail = 'demo@example.com';
  $validPass  = 'pass1234';

  if ($email === $validEmail && $password === $validPass) {
    $_SESSION['user'] = ['email' => $email];
    header('Location: /?page=home');   // ログイン後に遷移
    exit;
  } else {
    $error = 'メールアドレスまたはパスワードが違います。';
  }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>login画面</title>
  <link rel="stylesheet" href="/css/styleset-home.css" />
  <link rel="stylesheet" href="/css/start.css" />
</head>
<body>
  <div class="start">
    <h1 class="title">献立提案アプリ/ログイン</h1>

    <div class="inner">
      <?php if ($error): ?>
        <p class="error-ms" style="color:#c00;text-align:center;">
          <?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?>
        </p>
      <?php endif; ?>

      <!-- aタグではなく、フォームでPOSTする -->
      <form method="post" action="/?page=login">
        <ul class="menu">
          <li>
            <input
              class="card-input"
              type="email"
              name="email"
              placeholder="メールアドレス"
              required
              value="<?= htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8') ?>"
            />
          </li>
          <li>
            <input
              class="card-input"
              type="password"
              name="password"
              placeholder="パスワード"
              required
            />
          </li>
          <li>
            <button type="submit" class="card">ログイン</button>
          </li>
        </ul>
      </form>

      <footer class="start-footer">
        <div class="container">© 2025 TeamProject1</div>
      </footer>
    </div>

    <script src="/js/start.js"></script>
  </div>
</body>
</html>
