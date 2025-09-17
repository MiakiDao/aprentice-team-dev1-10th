<?php
require_once '/var/www/app/Controllers/MenuController.php';
$controller = new MenuController();

$response = $controller->handle($_POST ?? []);
$result = $response['result'];
$error  = $response['error'];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/styleset-input.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <title>仮)食事記録アプリ | 献立提案</title>
</head>

<body>
  <!-- header ---------------------------------------------->
  <div class="page-wrapper">
    <div id="top">
      <div class="page-header wrapper">
        <div class="header">
          <h1><a href="index.php?page=home"><img src="/image/logo.png" alt="ロゴ"></a></h1>

          <nav class="top-nav">
            <ul>
              <li class="login"><a href="index.php?page=home">ホームへ</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- banner ---------------------------------------------->
    <div class="banner">
      <h2>食事管理アプリ | 献立提案</h2>
    </div>

    <!-- main ---------------------------------------------->
    <div class="main wrapper">
      <!-- 左サイド ----------------------------------->
      <section id="mealplan">
        <div class="section-box">
          <h3>今日の献立を考えて！</h3>

          <!-- エラー表示 -->
          <?php if ($error): ?>
            <div class="error-ms"><?php echo htmlspecialchars($error); ?></div>
          <?php endif; ?>

          <div class="content">
            <form method="post">
                <label>ジャンル</label>
                <input type="radio" name="genre" value="1">和風
                <input type="radio" name="genre" value="2">中華
                <input type="radio" name="genre" value="3">洋風

                <label>主菜</label>
                <input type="radio" name="food" value="1">肉
                <input type="radio" name="food" value="2">魚
                <input type="radio" name="food" value="3">卵
                <input type="radio" name="food" value="4">豆

                <label>調理法</label>
                <input type="radio" name="method" value="1">焼く
                <input type="radio" name="method" value="2">煮る
                <input type="radio" name="method" value="3">炒める
                <input type="radio" name="method" value="4">蒸す

                <button type="submit">献立を提案</button>
            </form>
          </div>
        </div>
      </section>

      <div class="button">
        <nav class="main-nav">
          <ul>
            <li class="proposal"><a href="">今日の献立を探す</a></li>
          </ul>
        </nav>
      </div>

      


      <div class="section-box">
        <section id="mealoutput">
          <h3>今日の献立は・・・・</h3>
          <div class="confirm">
            <!-- 結果の表示  -->
            <?php if ($result): ?>
                <p>今日の献立: <strong><?php echo htmlspecialchars($result); ?></strong></p>
            <?php endif; ?>
          </div>

        </section>
      </div>
      <div class="button">
        <nav class="main-nav">
          <ul>
            <li class="onemore"><a href="">もう一度探す</a></li>
          </ul>
        </nav>
      </div>
     


    </div>





  </div>



  <!-- footer ---------------------------------------------->

  <footer id="footer">
    <div class="footer wrapper">
      <div class="footer-logo"><a href="index.php?page=home"><img src="/image/logo.png" alt="ロゴ"></a></div>
      <p>Copyright © TeamDev1 食事記録アプリ</p>
    </div>
  </footer>

</body>

</html>