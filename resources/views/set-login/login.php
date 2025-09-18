<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/styleset-login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <title>仮食事記録アプリ | ログイン</title>
</head>

<body>
  <!-- header ---------------------------------------------->
  <div class="page-wrapper">
    <div id="top">
      <div class="page-header wrapper">
        <div class="header">
          <h1><a href="/"><img src="/image/logo.png" alt="ロゴ"></a></h1>

          <nav class="top-nav">
            <ul>
              <li><a href="index.php?page=signup">新規登録</a></li>
            </ul>
          </nav>
        </div>
      </div>

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

</body>

</html>