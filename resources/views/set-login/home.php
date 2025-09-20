<?php
// require_once '/var/www/app/Controllers/homeController.php';
// $controller = new HomeController();
// $data = $controller->handle($_POST);
// $values = $data['values'];
?>

<!DOCTYPE html>
<html lang="ja">

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home画面</title>
  <link rel="stylesheet" href="/css/home.css" />

</head>

<body>
  <header class="topbar">
    <div class="topbar-inner">
      <div class="brand">献立提案アプリ/ホーム画面</div>
      <div class="spacer"></div>
      <a href="/index.php?page=setting" class="top-link top-link--accent">ユーザー登録</a>
    </div>
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

        <aside class="stats"
          data-weight="<?= htmlspecialchars((string)($metrics['weight']      ?? ''), ENT_QUOTES, 'UTF-8') ?>"
          data-height="<?= htmlspecialchars((string)($metrics['height']      ?? ''), ENT_QUOTES, 'UTF-8') ?>"
          data-body-fat="<?= htmlspecialchars((string)($metrics['body_fat']  ?? ''), ENT_QUOTES, 'UTF-8') ?>"
          data-muscle="<?= htmlspecialchars((string)($metrics['muscle_mass'] ?? ''), ENT_QUOTES, 'UTF-8') ?>">
          <ul class="metrics">
            <li>体重：<span id="weight">
                <?= htmlspecialchars((string)($metrics['weight']      ?? '-'), ENT_QUOTES, 'UTF-8') ?><?= isset($metrics['weight']) ? ' kg' : '' ?>
              </span></li>
            <li>身長：<span id="height">
                <?= htmlspecialchars((string)($metrics['height']      ?? '-'), ENT_QUOTES, 'UTF-8') ?><?= isset($metrics['height']) ? ' cm' : '' ?>
              </span></li>
            <li>体脂肪：<span id="bodyfat">
                <?= htmlspecialchars((string)($metrics['body_fat']    ?? '-'), ENT_QUOTES, 'UTF-8') ?><?= isset($metrics['body_fat']) ? ' %' : '' ?>
              </span></li>
            <li>筋肉量：<span id="muscle">
                <?= htmlspecialchars((string)($metrics['muscle_mass'] ?? '-'), ENT_QUOTES, 'UTF-8') ?><?= isset($metrics['muscle_mass']) ? ' kg' : '' ?>
              </span></li>
          </ul>
        </aside>

        <div class="kotsu-row span-all">
          <div class="bar wrapper">
            <!-- 記録数： -件 -->
            <div class="error-ms" id="countArea"></div>

            <div class="section-content">
              <div class="progress-bar">
                <div class="progress"></div>
                <div class="ticks">
                  <div class="tick">0%</div>
                  <div class="tick">20%</div>
                  <div class="tick">40%</div>
                  <div class="tick">60%</div>
                  <div class="tick">80%</div>
                  <div class="tick">100%</div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="actions span-all">
          <a href="/index.php?page=eat" class="btn-login">今日の食事を入力する</a>
          <a href="/index.php?page=menu" class="btn-login">献立提案してもらう</a>
        </div>
      </div>

      <footer class="site-footer">© 2025 TeamProject1</footer>
    </div>
  </main>

  <script src="/js/home2.js" defer></script>
  <script src="/js/home.js"></script>

</body>

</html>