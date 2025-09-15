/*!50503 SET NAMES utf8mb4 */;
ALTER DATABASE app CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;

-- body_types テーブルに初期データを挿入
INSERT INTO body_types (body_type_name, protein, fat, carbohydrates) VALUES
('筋肉質', 150, 50, 200),
('細身', 120, 40, 250),
('普通体型', 130, 60, 220);

-- users テーブルに初期データを挿入
INSERT INTO users (user_name, email, password, body_type_id) VALUES
('Taro', 'taro@example.com', 'password123', 1),
('Hanako', 'hanako@example.com', 'password123', 2);

-- genres テーブルに初期データを挿入
INSERT INTO genres (genre_name) VALUES
('和食'),
('洋食'),
('中華');

-- main_foods テーブルに初期データを挿入
INSERT INTO main_foods (main_food_name) VALUES
('ご飯'),
('パン'),
('麺');

-- methods テーブルに初期データを挿入
INSERT INTO methods (method_name) VALUES
('焼く'),
('煮る'),
('揚げる');

-- dishes テーブルに初期データを挿入
INSERT INTO dishes (dish_name, genre_id, main_food_id, method_id) VALUES
('照り焼きチキン', 1, 1, 1),
('パスタ', 2, 3, 1),
('麻婆豆腐', 3, 1, 2);