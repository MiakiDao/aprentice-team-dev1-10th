<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>login画面UIのみ</title>
  <link rel="stylesheet" href="/css/styleset-home.css" />
  <link rel="stylesheet" href="/css/start.css" />
  <link rel="stylesheet" href="/css/login.css" />
</head>
<body>
  <div class="start">
    <h1 class="title">献立提案アプリ/ログイン</h1>

    <div class="inner">
      
       <!-- 入力されたデータが一致しない場合はSigninControllerから発行されたエラー文を表示 -->
       <?php if (!empty($_SESSION['error'])): ?>
       <p style="color:red;"><?php echo $_SESSION['error']; ?></p>
       <?php unset($_SESSION['error']); ?>
       <?php endif; ?>

      <!-- aタグではなく、フォームでPOSTする -->
      <form method="post" action="/index.php?page=signin_verify" id="login-form" novalidate>
        <ul class="menu">
          <li class="login-field">
            <label class="login-label" for="email">メールアドレス</label>
            <input id="email" class="login-input card-input" type="email" name="email" placeholder="hello@example.com" required />
          </li>
          <li class="login-field">
            <label class="login-label" for="password">パスワード</label>
            <input id="password" class="login-input card-input" type="password" name="password" placeholder="8文字以上" required />
          </li>
          <li class="login_actions">
            <button type="submit" class="card">ログイン</button>
          </li>
        </ul>
      </form>

      <footer class="start-footer">
        <div class="container">© 2025 TeamProject1</div>
      </footer>
    </div>
    <!-- banner ---------------------------------------------->
    <div class="banner">
      <h2>食事管理アプリ | ログイン</h2>
    </div>

    <!-- main ---------------------------------------------->
    <div class="main wrapper">
      <div class="content">

        <!-- 入力されたデータが一致しない場合はSigninControllerから発行されたエラー文を表示 -->
        <?php if (!empty($_SESSION['error'])): ?>
        <p style="color:red;"><?php echo $_SESSION['error']; ?></p>
        <?php unset($_SESSION['error']); ?>
        <?php endif; ?>


        <!-- バリデーション入れる -->
        <form action="/index.php?page=signin_verify" method="POST">
          <div class="form">
            <label for="">メールアドレス</label>
            <input type="email" name="email" id="email">
          </div>
          <div class="form">
            <label for="">パスワード　　</label>
            <input type="password" name="password" id="password">
          </div>



        <div class="register">
          <nav class="main-nav">
            <ul>
              <li class="login">
                <button style="all: unset;" type="submit">ログイン</button>
              </li>
            </ul>
          </nav>
        </div>
        </form>
      </div>
    </div>

    <!-- footer ---------------------------------------------->

    <footer id="footer">
      <div class="footer wrapper">
        <div class="footer-logo"><a href="/"><img src="/image/logo.png" alt="ロゴ"></a></div>
        <p>Copyright © TeamDev1 食事記録アプリ</p>
      </div>
    </footer>
  </div>
    <script src="/js/login.js"></script>
</body>
</html>

