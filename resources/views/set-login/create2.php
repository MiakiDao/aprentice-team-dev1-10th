<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create2</title>

  <link rel="stylesheet" href="/css/styleset-home.css" />
  <link rel="stylesheet" href="/css/create2.css" />
  <!-- クリック選択→localStorage保存→hiddenに差し込む -->
  <script src="/js/create2.js" defer></script>
</head>
<body>
  <div class="start">
    <h1 class="title">なりたい体形はどれですか？</h1>

    <div class="inner">
      <!-- aタグではなく、フォームでPOSTする -->
			<form method="post" action="/index.php?page=create2_store" id="register-form">
        <ul class="photo-list">
          <li><img src="/image/man1.png" alt="写真1" tabindex="0"></li>
          <li><img src="/image/man2.png" alt="写真2" tabindex="0"></li>
          <li><img src="/image/man3.png" alt="写真3" tabindex="0"></li>
        </ul>

        <ul class="menu">
          <li class="login-field">
            <label class="login-label" for="weight">体重 (kg)</label>
            <input id="weight"
              type="number"
              name="weight"
              placeholder="60.0"
              inputmode="decimal"
              step="0.1"
              min="0"
              required />
          </li>

          <li class="login-field">
            <label class="login-label" for="height">身長 (cm)</label>
            <input id="height"
              type="number"
              name="height"
              placeholder="165.0"
              inputmode="decimal"
              step="0.1"
              min="0"
              required />
          </li>

          <li class="login-field">
            <label class="login-label" for="body-fat">体脂肪率 (%)</label>
            <input id="body-fat"
              type="number"
              name="body_fat_pct"
              placeholder="22.5"
              inputmode="decimal"
              step="0.1"
              min="0"
              max="100"
              required />
          </li>

          <li class="login-field">
            <label class="login-label" for="muscle-mass">筋肉量 (kg)</label>
            <input id="muscle-mass"
              type="number"
              name="muscle_mass"
              placeholder="42.3"
              inputmode="decimal"
              step="0.1"
              min="0"
              required />
          </li>
        </ul>

        <ul>
          <li class="submit-field">
            <button type="submit" class="card">新規登録</button>
          </li>
        </ul>
      </form>

      <footer class="start-footer">
        <div class="container">© 2025 TeamProject1</div>
      </footer>
    </div>
  </div>
</body>
</html>
