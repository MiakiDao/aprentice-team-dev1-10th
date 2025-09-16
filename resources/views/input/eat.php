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

            <form id="mealForm" action="">
              <div class="meal">
                <textarea name="meal" id="meal" autocomplete="meal"></textarea>
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
          <div class="progress" style="width: 40%;"></div>
          <div class="marker"></div>
          <div class="ticks"></div>
        </div>
      </div>

      <!-- バリデーション入れる -->
      <div class="error-ms" id="result"></div>
      <!-- バリデーション入れる -->
      <div class="outputmeal wrapper">
        <h3>過去の記録</h3>

        <table class="meallog-table">
          <thead>
            <tr>
              <th>日付</th>
              <th>内容</th>
            </tr>
          </thead>
          <tbody id="mealLogBody">
            <tr>
              <td>9/15</td>
              <td>サバの味噌煮<br>ほうれんそうのお浸し</td>
            </tr>
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

  <script>
    // 画面に入力値を表示する
    const form = document.getElementById('mealForm');
    const tbody = document.getElementById('mealLogBody');
    const result = document.getElementById('result');

    form.addEventListener('submit', function(event) {
      event.preventDefault();

      const inputValue = document.getElementById('meal').value.trim();
      if (inputValue === "") {
        result.textContent = "内容を入力してください";
        return;
      }

      // 新しい行を作成
      const newRow = document.createElement('tr');

      // 日付セル
      const dateCell = document.createElement('td');
      const today = new Date();
      dateCell.textContent = `${today.getMonth() + 1}/${today.getDate()}`;

      // 内容セル
      const contentCell = document.createElement('td');
      contentCell.innerHTML = inputValue.replace(/\n/g, '<br>');

      // 行にセルを追加
      newRow.appendChild(dateCell);
      newRow.appendChild(contentCell);

      // tbody に行を追加
      tbody.appendChild(newRow);

      // 入力欄を空にする
      document.getElementById('meal').value = '';
      result.textContent = "内容が登録され、こつこつバーが増加しました！"
    });

    // 入力値をPHPを通してDBへ送る

    
  </script>

</body>

</html>