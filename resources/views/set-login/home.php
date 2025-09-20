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
    <button type="button" class="top-link top-link--accent" id="go-setting">ユーザー登録</button>
  </div>  </div>
</header>

<main class="canvas">
  <div class="container">
    <div class="home-grid">
      <aside class="hero-card">
        <img src="/image/man2.png" alt="キャラクター">
      </aside>

<section class="board">
  <ul class="nutri"
    data-protein="<?= htmlspecialchars((string)($macros['protein'] ?? ''), ENT_QUOTES, 'UTF-8') ?>"
    data-carbs="<?= htmlspecialchars((string)($macros['carbs']   ?? ''), ENT_QUOTES, 'UTF-8') ?>"
    data-fat="<?= htmlspecialchars((string)($macros['fat']       ?? ''), ENT_QUOTES, 'UTF-8') ?>">
    <li>タンパク質：<?= htmlspecialchars((string)($macros['protein'] ?? '-'), ENT_QUOTES, 'UTF-8') ?>g</li>
    <li>糖質：<?= htmlspecialchars((string)($macros['carbs']   ?? '-'), ENT_QUOTES, 'UTF-8') ?>g</li>
    <li>脂質：<?= htmlspecialchars((string)($macros['fat']     ?? '-'), ENT_QUOTES, 'UTF-8') ?>g</li>
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
        <div class="kotsu" role="status" aria-live="polite">
          <div class="kotsu-head">
            <span class="label">コツコツバー</span>
            <span id="countArea" class="count">記録数: 0件</span>
          </div>
          <div class="bar">
            <div class="progress" style="width:0%"></div>
          </div>
        </div>
        <div class="divider" aria-hidden="true"></div>
        <div></div>
      </div>

      <div class="actions span-all">
        <a href="/index.php?page=eat"  class="btn-login">今日の食事を入力する</a>
        <a href="/index.php?page=menu" class="btn-login">献立提案してもらう</a>
     </div>
    </div>

    <footer class="site-footer">© 2025 TeamProject1</footer>
  </div>
</main>
</body>
</html>
