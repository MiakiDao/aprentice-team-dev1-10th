<!-- ホームに戻るボタンの追加をお願いします！ -->

<?php
require_once '/var/www/app/Controllers/menuController.php';
$controller = new MenuController();

$response = $controller->handle($_POST ?? []);
$result = $response['result'];
$error  = $response['error'];

$selectedGenre = $_POST['genre'] ?? '';
$selectedFood = $_POST['food'] ?? '';
$selectedMethod = $_POST['method'] ?? '';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/menu.css">
  
  <title>Menu 提案画面</title>
</head>

<body>
  <div class="start">
    <a href="/">
      <h1 class="title">献立提案アプリ/献立提案 🏠</h1>
    </a>

    <div class="inner">

      <div class="page-wrapper">
        <div class="main wrapper">
          <div class="section-box">

            <!-- エラー表示 -->
            <?php if ($error): ?>
            <div class="error-ms">
              <?php echo htmlspecialchars($error); ?>
            </div>
            <?php endif; ?>

            <div class="content">
              <form method="post">
                <h1 class="post-h1">ジャンル</h1>
                <div class="label-a">
                  <label><input type="radio" name="genre" value="1" <?php if ($selectedGenre=='1' ) echo 'checked' ;
                      ?>>和風</label>
                  <label><input type="radio" name="genre" value="2" <?php if ($selectedGenre=='2' ) echo 'checked' ;
                      ?>>中華</label>
                  <label><input type="radio" name="genre" value="3" <?php if ($selectedGenre=='3' ) echo 'checked' ;
                      ?>>洋風</label>
                </div>

                <h1 class="post-h1">主菜</h1>
                <div class="label-a">
                  <label><input type="radio" name="food" value="1" <?php if ($selectedFood=='1' ) echo 'checked' ;
                      ?>>肉</label>
                  <label><input type="radio" name="food" value="2" <?php if ($selectedFood=='2' ) echo 'checked' ;
                      ?>>魚</label>
                  <label><input type="radio" name="food" value="3" <?php if ($selectedFood=='3' ) echo 'checked' ;
                      ?>>卵</label>
                  <label><input type="radio" name="food" value="4" <?php if ($selectedFood=='4' ) echo 'checked' ;
                      ?>>豆</label>
                </div>

                <h1 class="post-h1">調理法</h1>
                <div class="label-a">
                  <label><input type="radio" name="method" value="1" <?php if ($selectedMethod=='1' ) echo 'checked' ;
                      ?>>焼く</label>
                  <label><input type="radio" name="method" value="2" <?php if ($selectedMethod=='2' ) echo 'checked' ;
                      ?>>煮る</label>
                  <label><input type="radio" name="method" value="3" <?php if ($selectedMethod=='3' ) echo 'checked' ;
                      ?>>炒める</label>
                  <label><input type="radio" name="method" value="4" <?php if ($selectedMethod=='4' ) echo 'checked' ;
                      ?>>蒸す</label>
                </div>

                <div class="button">
                  <button type="submit" class="card">今日の献立を考えて！</button>
                </div>

              </form>
            </div>
          </div>

          <div class="section-box">
            <button class="shine-button button-electric" id="resetButton">
              <h3>今日の献立は・・・・</h3>
              <div class="confirm">
                <!-- 結果の表示  -->
                <?php if ($result): ?>
                <p><strong>
                    <?php echo htmlspecialchars($result); ?>
                  </strong></p>
                <?php endif; ?>
              </div>
              <p></p>
              <p class="p-small">👈クリックでもう一度探す！👈</p>

            </button>
          </div>

        </div>
      </div>


      <footer class="start-footer">
        <div class="wrapper">
          <div class="container">© 2025 TeamProject1</div>
        </div>
      </footer>
    </div>
  </div>

  <!--JS------------------------------- ------------------------------->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const resetBtn = document.getElementById("resetButton");
      const form = document.querySelector("form");
      const resultArea = document.querySelector(".confirm");

      // ボタンクリック時の処理
      resetBtn.addEventListener("click", function () {
        if (form) {
          const radios = form.querySelectorAll('input[type="radio"]');
          radios.forEach((radio) => (radio.checked = false));
          form.reset();
        }

        if (resultArea) {
          resultArea.innerHTML = "";
        }
      });
    });
  </script>
</body>

</html>