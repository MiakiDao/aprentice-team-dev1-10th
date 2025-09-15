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

          <!-- バリデーション入れる -->
          <div class="error-ms">それぞれ選択してください</div>
          <!-- バリデーション入れる -->

          <div class="content">
            <div class="meal-category">
              <label for="">和洋中</label>
              <input type="checkbox"><span>和風</span>
              <input type="checkbox"><span>洋風</span>
              <input type="checkbox"><span>中華</span>
            </div>
            <div class="meal-protein">
              <label for="">主菜</label>
              <input type="checkbox"><span>肉</span>
              <input type="checkbox"><span>魚</span>
              <input type="checkbox"><span>卵</span>
              <input type="checkbox"><span>豆腐</span>
            </div>
            <div class="meal-method">
              <label for="">調理法</label>
              <input type="checkbox"><span>焼き</span>
              <input type="checkbox"><span>蒸す</span>
              <input type="checkbox"><span>煮る</span>
              <input type="checkbox"><span>炒める</span>
            </div>
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

      <!-- バリデーション入れる -->
      <div class="error-ms">見つかりました！</div>
      <!-- バリデーション入れる -->


      <div class="section-box">
        <section id="mealoutput">
          <h3>今日の献立は・・・・</h3>
          <div class="confirm">
            <input type="text"><span>で決まりです！</span>
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