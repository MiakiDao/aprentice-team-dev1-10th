<?php
namespace App\Models;

require_once '/var/www/config/db.php';

use DB;
use PDO;

class MeasurementModel {
    private PDO $pdo;

    public function __construct() {
        $this->pdo = DB::conn();
    }

    // ユーザーIDから身体情報を取得
    public function getMeasurementByUserId(int $userId): ?array {
        $stmt = $this->pdo->prepare("
            SELECT weight, height, body_fat, muscle_mass
            FROM measurements
            WHERE user_id = ?
        ");
        $stmt->execute([$userId]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row ?: null;
    }
}
