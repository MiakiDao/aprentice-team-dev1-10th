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

    public static function create(
        int $userId,
        float $weight,
        float $height,
        ?float $bodyFat,
        ?float $muscleMass
    ): int {
        $pdo = DB::conn();

        $sql = 'INSERT INTO measurements (user_id, weight, height, body_fat, muscle_mass)
                VALUES (?, ?, ?, ?, ?)';
        $stmt = $pdo->prepare($sql);
        $ok = $stmt->execute([
            $userId,
            $weight,
            $height,
            $bodyFat,
            $muscleMass,
        ]);

        if (!$ok) return 0;
        return (int)$pdo->lastInsertId();
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
