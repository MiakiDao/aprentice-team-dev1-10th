<?php
require_once '/var/www/app/Controllers/homeController.php';
$controller = new HomeController();
$data = $controller->handle($_POST);
$values = $data['values'];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/styleset-home.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <title>仮)食事記録アプリ | ホーム画面</title>
</head>

<body>
  <!-- header ---------------------------------------------->
   <?php if ($values): ?>
    <div class="form-img">
        <img src="<?= htmlspecialchars($values['image_path']) ?>" alt="">
        <span><?= htmlspecialchars($values['body_type_name']) ?></span>
    </div>

    <div class="nutrition">
        <div>たんぱく質: <?= htmlspecialchars($values['protein']) ?>g</div>
        <div>脂質: <?= htmlspecialchars($values['fat']) ?>g</div>
        <div>炭水化物: <?= htmlspecialchars($values['carbohydrates']) ?>g</div>
    </div>

    <div class="body-info">
    <?php if (!empty($values['user_name'])): ?>
      ユーザー名: <?= htmlspecialchars($values['user_name']) ?>
    <?php endif; ?>

    <?php if (!empty($values['weight'])): ?>
      体重: <?= htmlspecialchars($values['weight']) ?> kg
    <?php endif; ?>

    <?php if (!empty($values['height'])): ?>
      身長: <?= htmlspecialchars($values['height']) ?> cm
    <?php endif; ?>

    <?php if (!empty($values['body_fat'])): ?>
      体脂肪率: <?= htmlspecialchars($values['body_fat']) ?> %
    <?php endif; ?>

    <?php if (!empty($values['muscle_mass'])): ?>
      筋肉量: <?= htmlspecialchars($values['muscle_mass']) ?> kg
    <?php endif; ?>
  </div>
  <?php endif; ?>


  <div class="page-wrapper">
    <div id="top">
      <div class="page-header wrapper">
        <div class="header">
          <h1><a href="index.php?page=home"><img src="/image/logo.png" alt="ロゴ"></a></h1>

          <nav class="top-nav">
            <ul>
              <li><a href="index.php?page=home-setting">ユーザー名⚙️</a></li>
              <li class="logout"><a href="index.php?page=login">ログアウト</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- banner ---------------------------------------------->
    <div class="banner">
      <h2>食事管理アプリ | ホーム</h2>
    </div>

    <!-- main ---------------------------------------------->
    <div class="main wrapper">
      <!-- 左サイド ----------------------------------->
      <section id="nutrition">
        <div class="section-box">
          <h3>一日の目標摂取量</h3>
          <div class="section-content">
            <div class="form-img">
              <img src="/image/man2.png" alt="">
              <span>マッチョ</span>
            </div>

            <form action="">
              <div class="nutrition">
                <div class="form">
                  <label for="cal">カロリー　　</label>
                  <input type="number" name="cal" id="cal">
                  <span>kcal</span>
                </div>
                <div class="form">
                  <label for="pro">たんぱく質</label>
                  <input type="number" name="pro" id="pro">
                  <span>g</span>
                </div>
                <div class="form">
                  <label for="fat">脂質　　　</label>
                  <input type="number" name="fat" id="fat">
                  <span>g</span>
                </div>
                <div class="form">
                  <label for="carb0">炭水化物　</label>
                  <input type="number" name="carbo" id="carbo">
                  <span>g</span>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="bar wrapper">
        <h3>こつこつ記録バー</h3>
        <div id="countArea"></div>

        <div class="progress-bar">
          <div class="progress"></div>
          <div class="ticks"></div>
        </div>
      </div>

      </section>
      <!-- 右サイド -------------------------------------------------->

      <aside id="bodydata">
        <div class="aside-box">
          <h3>体組成</h3>
          <form action="">
            <div class="measure">
              <div class="form">
                <label for="">体重　　</label>
                <input type="number" name="weight" id="weight">
                <span>kg</span>
              </div>
              <div class="form">
                <label for="height">身長　　</label>
                <input type="number" name="height" id="heightt">
                <span>cm</span>
              </div>
              <div class="form">
                <label for="">体脂肪率　</label>
                <input type="number" name="bodyFat" id="bodyFat">
                <span>%</span>
              </div>
              <div class="form">
                <label for="">筋肉量　</label>
                <input type="number" name="muscle" id="muscle">
                <span>kg</span>
              </div>
            </div>
          </form>
        </div>
      </aside>

      <div>
        <div class="button">
          <nav class="main-nav">
            <ul>
              <li class="eatinput"><a href="index.php?page=eat">今日の食事を入力する</a></li>
              <li class="proposal"><a href="index.php?page=menu">献立を提案してもらう</a></li>
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
  </div>

  <script src="js/home.js"></script>

</body>

</html>