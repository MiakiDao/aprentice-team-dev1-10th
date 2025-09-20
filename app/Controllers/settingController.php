<?php
require_once __DIR__ . '/../Models/measurementModel.php';
use App\Models\MeasurementModel; 

class settingController
{
    public function store(): void
    {
        session_start();

        // ログインをしているかどうかを判定
        if (empty($_SESSION['user']['id'])) {
            $_SESSION['error'] = 'ログインしてください。';
            header('Location: /index.php?page=login');
            exit;
        }

        // フォーム値を受け取りる空なら ''）
        $weight      = trim($_POST['weight']      ?? '');
        $height      = trim($_POST['height']      ?? '');
        $body_fat    = trim($_POST['body_fat']    ?? '');
        $muscle_mass = trim($_POST['muscle_mass'] ?? '');

        // 必須のざっくりチェック（ここでは体重・身長だけ必須に）
        if ($weight === '' || $height === '') {
            $_SESSION['error'] = '体重と身長は必須です。';
            header('Location: /index.php?page=setting');
            exit;
        }

        // 保存（文字列ー＞数値に直し、体脂肪率と筋肉量はNULLを許容）
        $userId      = (int)$_SESSION['user']['id'];
        $weightF     = (float)$weight;
        $heightF     = (float)$height;
        $bodyFatF    = ($body_fat === '')    ? null : (float)$body_fat;
        $muscleMassF = ($muscle_mass === '') ? null : (float)$muscle_mass;

        $user = MeasurementModel::create($userId, $weightF, $heightF, $bodyFatF, $muscleMassF);

        if ($user) {
            $_SESSION['success'] = '体組成データを保存しました。';
            header('Location: /index.php?page=home');
            exit;
        } else {
            $_SESSION['error'] = '保存に失敗しました。';
            header('Location: /index.php?page=setting');
            exit;
        }
    }
}