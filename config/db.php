<?php

class DB {
    private static ?PDO $pdo = null;

    public static function conn(): PDO {
        if (!self::$pdo) {
            $dsn = 'mysql:host=db;dbname=app;charset=utf8mb4';
            self::$pdo = new PDO($dsn, 'app', 'secret', [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        }
        return self::$pdo;
    }
}