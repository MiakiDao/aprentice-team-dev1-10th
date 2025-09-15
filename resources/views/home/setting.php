<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/styleset-home.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <title>仮)食事記録アプリ | ユーザー登録変更ページ</title>
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
              <li class="login"><a href="/resources/views/home/index.php">ホームへ</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- banner ---------------------------------------------->
    <div class="banner">
      <h2>食事管理アプリ  | ユーザー登録変更</h2>
    </div>

    <!-- main ---------------------------------------------->
    <div class="main wrapper">
      <!-- 左サイド ----------------------------------->
      <section id="nutrition">
        <div class="section-box">
          <h3>メールアドレスまたはパスワードを変更する</h3>

          <!-- バリデーション入れる -->
          <div class="error-ms">メールアドレスまたはパスワードが違います。</div>
          <!-- バリデーション入れる -->

          <form action="">
            <div class="form">
              <label for="">メールアドレス</label>
              <input type="email" name="email" id="email">
            </div>
            <div class="form">
              <label for="">パスワード　　</label>
              <input type="password" name="password" id="password">
            </div>
            <div class="form">
            <label for="">ユーザー名　　</label>
            <input type="text" name="name" id="name">
          </div>
          </form>
        </div>

        <div class="section-box">
          <h3>なりたい体格を変更する</h3>

          <form action="">
            <div class="settingman">
              <div class="form-img">
                <img src="/image/man1.png" alt="マッチョ">
                <label for="">マッチョ</label>
              </div>
              <div class="form-img">
                <img src="/image/man2.png" alt="マッチョ">
                <label for="">少しマッチョ</label>
              </div>
              <div class="form-img">
                <img src="/image/man3.png" alt="マッチョ">
                <label for="">これからマッチョ</label>
              </div>
            </div>
          </form>

        </div>
      </section>
      <!-- 右サイド -------------------------------------------------->
      <aside id="bodydata">
        <div class="aside-box">
          <h3>体組成を変更する</h3>
          <form action="">
            <div class="measure-update">
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

      <div class="btn wrapper">
        <div class="button">
          <nav class="main-nav">
            <ul>
              <li><a href="index.php?page=home">登録を変更する</a></li>
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

</body>

</html>