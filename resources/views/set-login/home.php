<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home画面</title>
  <link rel="stylesheet" href="/css/home.css" />
  <script src="/js/home2.js" defer></script>
</head>

<body>
<header class="topbar">
  <div class="topbar-inner">
    <div class="brand">献立提案アプリ/ホーム画面</div>
    <div class="spacer"></div>
    <a href="/index.php?page=home-setting">選択画面</a>
    <button class="top-link top-link--accent" type="button">ユーザー登録</button>
  </div>
</header>

<main class="canvas">
  <div class="container">
    <div class="home-grid">
      <aside class="hero-card">
        <img src="/image/man2.png" alt="キャラクター">
      </aside>

      <section class="board">
        <h2>一日の摂取カロリー</h2>
        <ul class="nutri">
          <li>タンパク質</li>
          <li>糖質</li>
          <li>脂質</li>
        </ul>
      </section>

      <aside class="stats">
        <ul class="metrics">
          <li>体重：<span id="weight">-</span></li>
          <li>身長：<span id="height">-</span></li>
          <li>体脂肪：<span id="bodyfat">-</span></li>
          <li>筋肉量：<span id="muscle">-</span></li>
        </ul>
      </aside>

      <div class="kotsu-row span-all">
        <div class="kotsu">
          <div class="fill" aria-hidden="true"></div>
          <div class="label">コツコツバー</div>
        </div>
        <div class="divider" aria-hidden="true"></div>
        <div></div>
      </div>

      <div class="actions span-all">
        <button type="button" class="btn-login">今日の食事を入力する</button>
        <button type="button" class="btn-login">献立提案してもらう</button>
      </div>
    </div>

    <footer class="site-footer">© 2025 TeamProject1</footer>
  </div>
</main>
</body>
</html>
