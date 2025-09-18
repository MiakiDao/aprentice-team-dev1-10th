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
    <h1 class="title">献立提案アプリ/ログインUIのみ</h1>

    <div class="inner">
      <p id="err" class="login-alert" hidden>メールアドレスまたはパスワードが違います</p>

      <!-- aタグではなく、フォームでPOSTする -->
      <form method="post" action="/?page=login" id="login-form" novalidate>
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
  </div>
    <script src="/js/login.js"></script>
  </div>
</body>
</html>
