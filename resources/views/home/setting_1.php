<!-- 最終レイアウト時、ファイル名HTML → phpに変更お願いします！ -->
<!-- formの受け渡しは個々に分けてはいけない？ -->
<!-- http://localhost:8080/index.php?page=home-setting -->


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home-setting 開始画面</title>

  <!--CSS-------------------------------- ------------------------------->
  <style>
    html,
    body {
      font-size: 100%;
      height: 100%;
      margin: 0;
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, "Courier New", "Noto Sans Mono", monospace;
      line-height: 1.7;
      color: black;
    }

    a {
      list-style: none;
      text-decoration: none;
      color: black;
    }

    li {
      list-style: none;
    }

    .container {
      text-align: center;
    }

    h1:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 0 rgba(0, 0, 0, .2);
    }

    .start {
      background: #d9f2de;
      min-height: 100vh;
      margin: 0;
      padding: 10px;
    }

    .start .title {
      font-size: 32px;
      font-weight: bold;
      text-align: center;
      background: #fff;
      width: min(90vw, 700px);
      margin: auto;
      padding: 16px 20px;
      /*4の倍数にしておくと、どんな倍率でも割り切れて崩れにくい。*/
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, .5);
    }

    .wrapper {
      width: 70%;
      margin: 0 auto;
      padding: 0 4%;
      box-sizing: border-box;
    }

    .main.wrapper {
      display: flex;
      gap: 20px;
      align-items: flex-start;
      flex-wrap: nowrap;
    }

    /* 左側のsection */
    #nutrition {
      flex: 2;
    }

    /* 右側のaside */
    #bodydata {
      flex: 1;
    }

    .card {
      font-size: clamp(18px, 2.8vw, 24px);
      color: #000;
      display: block;
      text-align: center;
      background: #fff;
      text-decoration: none;
      padding: 16px 24px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, .5);
      transition: transform .25s ease, box-shadow .25s ease;
    }

    .submit-field {
      list-style: none;
      display: flex;
      justify-content: center;
    }


    .error-ms {
      color: #FF0000;
      font-weight: bold;
      margin: 20px 0;
      text-align: center;
    }

    .start .card:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 0 rgba(0, 0, 0, .2);
    }

    .start .card:active {
      transform: translateY(0);
      box-shadow: 0 4px 0 rgba(0, 0, 0, .15);
    }

    .start .start-footer {
      font-size: small;
    }


    /* メイン----------------------------------------------------------
    -------------------------------------------------------------------- */
    button {
      margin: 30px;
    }

    .section-box,
    .aside-box {
      margin: 30px auto;

    }

    .button-wrapper {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1rem;
    }

    .button-label {
      color: #64748b;
      font-size: 0.9rem;
      font-weight: 500;
      letter-spacing: 1px;
      text-transform: uppercase;
    }

    .shine-button {
      position: transparent;
      padding: 1.2rem 2.5rem;
      font-size: 1.1rem;
      font-weight: 600;
      border: none;
      border-radius: 20px;
      cursor: pointer;
      overflow: hidden;
      transition: all 0.3s ease;
      letter-spacing: 0.5px;
      width: 80%;
      text-align: center;
    }


    .button-electric {
      background-color: rgba(255, 255, 255, 0.4);
      color: #555555;
      box-shadow:
        0 10px 30px rgba(168, 230, 163, 0.4),
        inset 0 1px 0 rgba(255, 255, 255, 0.2);
      overflow: hidden;
      outline: 2px solid #FEBF00;
      outline-offset: 5px;
    }

    .button-electric:hover {
      transform: translateY(-3px);
      box-shadow:
        0 15px 40px rgba(168, 230, 163, 0.4),
        inset 0 1px 0 rgba(255, 255, 255, 0.3);
      background: linear-gradient(135deg, #ffff 100%, #C0E9B0 50%, #D8F1C8 100%);
    }

    .button-electric:active {
      background: linear-gradient(135deg, #ffff 100%, #BFE8B2 50%, #D5F1C5 100%);
      transform: translateY(0);
      box-shadow:
        0 5px 15px rgba(168, 230, 163, 0.4),
        inset 0 1px 0 rgba(255, 255, 255, 0.2);
    }

    .confirm {
      font-size: 50px
    }

    .main {
      text-align: center;
      padding-top: 20px;
      flex: 1;
    }

    h3 {
      font-size: 1.2rem;
      margin-bottom: 30px;
    }

    main.wrapper {
      display: flex;
      gap: 20px;
      align-items: flex-start;
      flex-wrap: nowrap;
    }


    .settingman {
      display: flex;
      justify-content: space-between;
      padding: 10px 15px 50px;
    }

    .form-img {
      display: flex;
      flex-direction: column;
      align-items: center;
      border: 0.4px solid#999999;
      border-radius: 16px;
      padding: 10px 20px;
    }

    .form-img img {
      height: 150px;
      width: auto;
      object-fit: cover;
    }

    input {
      height: 30px;
      width: 80%;
      border-top: #fff;
      border-left: #fff;
      border-right: #fff;
      border-bottom: 0.4px solid #999999;
      border-radius: 0;
      margin: 10px 5px;
    }

    .form input {
      width: 80px;
    }

    input:hover {
      background-color: #5555;
    }

    /* 右サイド----------------------------- */

    .p-small {
      font-size: 0.8rem;
    }

    .start-footer {
      margin-top: 30px;
    }
  </style>
</head>

<!-- HTML-------------------------------- ------------------------------->

<body>
  <div class="start">
    <a href="/">
      <h1 class="title">献立提案アプリ/ユーザー登録画面 🏠</h1>
    </a>

    <div class="inner">
      <div class="main wrapper">
        <!-- 左サイド ----------------------------------->
        <section id="nutrition">
          <div class="section-box">
            <div class="shine-button button-electric">
              <h3>ユーザ情報を変更する</h3>

              <!-- バリデーション入れる -->
              <div class="error-ms">8文字以上</div>
              <!-- バリデーション入れる -->

              <!-- action id for type nameの変更の確認をお願いします！ -->
              <form method="post" action="" id="login-form" novalidate>
                <ul class="menu">
                  <li class="user-field">
                    <label class="user-label" for="email">メールアドレス</label>
                    <input id="email" class="login-input card-input" type="email" name="email" value=""
                      placeholder="hello@example.com" required />
                  </li>
                  <li class="user-field">
                    <label class="user-label" for="password">パスワード</label>
                    <input id="password" class="login-input card-input" type="password" name="password" value=""
                      placeholder="8文字以上" required />
                  </li>
                  <li class="user-field">
                    <label class="user-label" for="">ユーザー名</label>
                    <input id="" class="login-input card-input" type="" name="" value="" placeholder="ユーザー名" required />
                  </li>
                </ul>
              </form>
            </div>

          </div>

          <div class="section-box">

            <div class="shine-button button-electric">
              <h3>なりたい体格を変更する</h3>

              <form action="" method="" id="">
                <div class="settingman">
                  <div class="form-img">
                    <img src="/image/man1.png" alt="マッチョ1">
                    <label for="">マッチョ</label>
                  </div>
                  <div class="form-img">
                    <img src="/image/man2.png" alt="マッチョ2">
                    <label for="">少しマッチョ</label>
                  </div>
                  <div class="form-img">
                    <img src="/image/man3.png" alt="マッチョ3">
                    <label for="">これからマッチョ</label>
                  </div>
                </div>
              </form>
            </div>


          </div>
        </section>
        <!-- 右サイド -------------------------------------------------->
        <aside id="bodydata">
          <div class="aside-box">

            <div class="shine-button button-electric">
              <h3>体組成を変更する</h3>
              <form action="">
                <div class="measure-update">
                  <div class="form"><label>体重</label><input type="number" name="weight"><span>kg</span></div>
                  <div class="form"><label>身長</label><input type="number" name="height"><span>cm</span></div>
                  <div class="form"><label>体脂肪率</label><input type="number" name="bodyFat"><span>%</span></div>
                  <div class="form"><label>筋肉量</label><input type="number" name="muscle"><span>kg</span></div>
                </div>
              </form>
            </div>

          </div>

          <div class="aside-box">
            <div class="submit-field">
              <a href="/"><button type="submit" class="card">登録を変更する</button></a>
            </div>
          </div>
        </aside>

      </div>



      <footer class="start-footer">
        <div class="container">© 2025 TeamProject1</div>
      </footer>
    </div>
  </div>

  <!-- JS-------------------------------- ------------------------------->
  <script></script>
</body>

</html>