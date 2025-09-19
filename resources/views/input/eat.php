<!-- 不要なHTML 使わない！！！ -->

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/styleset-eat.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <title>仮)食事記録アプリ | 食事を記録する</title>
</head>

<body>
<canvas id="confetti"></canvas>
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
      <h2>食事管理アプリ | 食事記録</h2>
    </div>

    <!-- main ---------------------------------------------->
    <main>
      <div class="main wrapper">

        <div class="wrapper">
          <h3>食事を記録する</h3>
          <div class="section-content">
            <div class="form-img">
              <img src="/image/man2.png" alt="">
              <span>マッチョ</span>
            </div>

            <form id="mealForm" action="" method="post">
              <div class="meal">
                <textarea name="meal" id="meal" placeholder="食事を入力！" class="meal-input"></textarea>
              </div>
              <div class="button">
                <button type="submit" id="registerBtn" class="proposal">登録する</button>
              </div>

            </form>
          </div>

        </div>
      </div>

      <div class="bar wrapper">
        <h3>こつこつ記録バー</h3>

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

      <!-- バリデーション入れる -->
      <div class="error-ms" id="countArea"></div>
      <div class="error-ms" id="result"></div>

      <div class="outputmeal wrapper">
        <h3>過去の記録</h3>
        <table class="meallog-table">
          <thead>
            <tr>
              <th>日付</th>
              <th>内容</th>
              <th>ごみ箱</th>
            </tr>
          </thead>
          <tbody id="mealLogBody">
            <!-- <tr>
              <td></td>
              <td><br></td>
            </tr> -->
          </tbody>
        </table>
      </div>
    </main>

    <!-- footer ---------------------------------------------->
    <footer id="footer">
      <div class="footer wrapper">
        <div class="footer-logo"><a href="index.php?page=home"><img src="/image/logo.png" alt="ロゴ"></a></div>
        <p>Copyright © TeamDev1 食事記録アプリ</p>
      </div>
    </footer>
  </div>

<script src="js/eat.js"></script>
</body>

</html>