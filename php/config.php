<?php
$prefectures = array(
  0 => '選択して下さい',
  1 => '北海道',
  2 => '青森県',
  3 => '岩手県',
  4 => '宮城県',
  5 => '秋田県',
  6 => '山形県',
  7 => '福島県',
  8 => '茨城県',
  9 => '栃木県',
  10 => '群馬県',
  11 => '埼玉県',
  12 => '千葉県',
  13 => '東京都',
  14 => '神奈川県',
  15 => '山梨県',
  16 => '長野県',
  17 => '新潟県',
  18 => '富山県',
  19 => '石川県',
  20 => '福井県',
  21 => '岐阜県',
  22 => '静岡県',
  23 => '愛知県',
  24 => '三重県',
  25 => '滋賀県',
  26 => '京都府',
  27 => '大阪府',
  28 => '兵庫県',
  29 => '奈良県',
  30 => '和歌山県',
  31 => '鳥取県',
  32 => '島根県',
  33 => '岡山県',
  34 => '広島県',
  35 => '山口県',
  36 => '徳島県',
  37 => '香川県',
  38 => '愛媛県',
  39 => '高知県',
  40 => '福岡県',
  41 => '佐賀県',
  42 => '長崎県',
  43 => '熊本県',
  44 => '大分県',
  45 => '宮崎県',
  46 => '鹿児島県',
  47 => '沖縄県'
);

$genders = array(
  'gender1' => '男',
  'gender2' => '女',
  'gender3' => 'その他'
);


$genres = array(
  'genre1' => 'J-POP',
  'genre2' => 'ロック',
  'genre3' => 'クラシック',
  'genre4' => 'EDM',
  'genre5' => 'K-POP',
  'genre6' => 'その他'
);

try {
  $dsn = 'mysql:host=localhost;dbname=test';
  $user = 'root';
  $password = '';

  $pdo = new PDO(
    $dsn,
    $user,
    $password,
    [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
      PDO::ATTR_EMULATE_PREPARES => false,
    ]
  );
} catch (PDOException $e) {
  exit('接続エラー' . $e->getMessage());
}

?>