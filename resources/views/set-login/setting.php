<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/styleset-login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <title>仮)食事記録アプリ | 理想の体重</title>
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
              <li class="login"><a href="index.php?page=login">ログイン</a></li>
            </ul>
          </nav>
        </div>
      </div>

    </div>
    <!-- banner ---------------------------------------------->
    <div class="banner">
      <h2>食事管理アプリ | 理想の体重</h2>
    </div>

    <!-- main ---------------------------------------------->
    <div class="main wrapper">
      <div>
        <div class="question">なりたい体格はどれですか？</div>
        <form action="/index.php?page=setting_store" method="POST">
          <div class="settingman">
            <div class="form-img">
              <input type="radio" name="body_type_id" value="1" required>
              <img src="/image/man1.png" alt="マッチョ">
              <label for="">マッチョ</label>
            </div>
            <div class="form-img">
              <input type="radio" name="body_type_id" value="1" required>
              <img src="/image/man2.png" alt="マッチョ">
              <label for="">少しマッチョ</label>
            </div>
            <div class="form-img">
              <input type="radio" name="body_type_id" value="1" required>
              <img src="/image/man3.png" alt="マッチョ">
              <label for="">これからマッチョ</label>
            </div>
          </div>


        <div class="question">あなたの体組成を入力してください</div>
          <div class="measure">
            <div class="form">
              <label for="">体重　　</label>
              <input
              type="number"
              name="weight"
              id="weight">
              <span>kg</span>
            </div>
            <div class="form">
              <label for="height">身長　　</label>
              <input
              type="number"
              name="height"
              id="height">
              <span>cm</span>
            </div>
            <div class="form">
              <label for="">体脂肪率　</label>
              <input
              type="number"
              name="body_fat"
              id="bodyFat">
              <span>%</span>
            </div>
            <div class="form">
              <label for="">筋肉量　</label>
              <input 
              type="number"
              name="muscle_mass"
              id="muscle">
              <span>kg</span>
            </div>
          </div>



        <!-- バリデーション入れる -->
        <div class="error-ms">体型を選択してください</div>
        <!-- バリデーション入れる -->

        <div class="register">
          <nav class="main-nav">
            <ul>
              <li><button type="submit" style="all: unset; color: white;">新規登録 完了</button></li>
            </ul>
          </nav>
        </div>
        </form>
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

</body>

</html>