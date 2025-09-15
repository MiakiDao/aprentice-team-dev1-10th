<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/styleset-login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <title>仮)食事記録アプリ | 新規登録</title>
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
              <li class="login"><a href="index.php?page=login">ログイン</a></li>
            </ul>
          </nav>
        </div>
      </div>

    </div>
    <!-- banner ---------------------------------------------->
    <div class="banner">
      <h2>食事管理アプリ | 新規登録</h2>
    </div>

    <!-- main ---------------------------------------------->
    <div class="main wrapper">
      <div class="content">

        <!-- バリデーション入れる -->
        <div class="error-ms">メールアドレスまたはパスワードが違います。</div>


        <!-- バリデーション入れる -->
        <form action="">
          
          <div class="form">
            <label for="">メールアドレス</label>
            <input type="email" name="email" id="email">
          </div>
          <div class="form">
            <label for="">パスワード　　</label>
            <input type="password" name="password" id="password">
          </div>
          <div class="form">
            <label for="">ユーザー名　　</label>
            <input type="text" name="name" id="name">
          </div>
        </form>


        <div class="register">
          <nav class="main-nav">
            <ul>
              <li class="next"><a href="index.php?page=setting">次へ　→</a></li>
            </ul>
          </nav>
        </div>
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