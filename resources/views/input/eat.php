<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/styleset-input.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <title>仮)食事記録アプリ | 食事を記録する</title>
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

            <form action="">
              <div class="meal">
                <ul>
                  <textarea name="meal" id="meal" autocomplete="meal">textarea・サバの味噌煮・ほうれん草のお浸し</textarea>
                </ul>
                <input type="text"><span>input</span>
              </div>
            </form>
          </div>

          <form action="">
              <div class="button">
                <nav class="main-nav">
                  <ul>
                    <li class="proposal"><a href="#" id="registerBtn">登録する</a></li>
                  </ul>
                </nav>
              </div>
            </form>

        </div>
      </div>

      <div class="outputmeal wrapper">
        <h3>過去の記録</h3>
        <!-- バリデーション入れる -->
        <div class="error-ms">記録が更新されました！</div>
        <!-- バリデーション入れる -->
        <table class="meallog-table">
          <thead>

            <tr>
              <th>日付</th>
              <th>内容</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>9/15</td>
              <td>サバの味噌煮<br>ほうれんそうのお浸し</td>
            </tr>
            <tr>
              <td>9/15</td>
              <td>サバの味噌煮<br>ほうれんそうのお浸し</td>
            </tr>
            <tr>
              <td>9/15</td>
              <td>サバの味噌煮<br>ほうれんそうのお浸し</td>
            </tr>
            <tr>
              <td>9/15</td>
              <td>サバの味噌煮<br>ほうれんそうのお浸し</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="bar wrapper">
        <h3>こつこつ記録バー</h3>

        <!-- バリデーション入れる -->
        <div class="error-ms">記録バーが更新されました！</div>
        <!-- バリデーション入れる -->

        <div class="progress-bar">
          <div class="progress" style="width: 60%;"></div>
          <div class="marker"></div>
        </div>
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
  <script src="/js/eat.js"></script>

</body>

</html>