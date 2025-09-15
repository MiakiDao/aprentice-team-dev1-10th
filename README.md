# aprentice-team-dev1-10th

# ディレクトリ構成
```
.
├── app
│   ├── Controllers/        ← コントローラ (リクエストを受けて処理を振り分ける)
│   │   └── ArticleController.php（例）
│   ├── Models/             ← モデル (DBとやり取りするクラス)
│   │   └── Article.php（例）
├── config/                 ← 設定ファイル（DB接続など）
├── database/               ← マイグレーション用SQLや初期データ
├── docker-compose.yml
├── Dockerfile
├── .gitignore
├── public/
│   ├── index.php           ← public/index.php   ← サイトを開いたとき最初に呼ばれるファイル。ここで URL を見て、resources/views のテンプレートを読み込む。
│   ├── css/                ← CSSファイル（スタイルシート）
│   │   └── style.css(例）
│   ├── js/                 ← JavaScriptファイル
│   │   └── app.js（例）
│   └── images/             ← 画像（アイコンやバナーなど）
├── resources/
│   └── views/              ← 表示用テンプレート
│       ├── home.php （例）
│       ├── article.php（例）
│       ├── create.php （例）
│       └── edit.php （例）
└── README.md
```
