<?php
require (dirname(__FILE__).'/functions.php');
require(dirname(__FILE__).'/config.php');

$result = showDetail($pdo);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アンケート 詳細画面</title>
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
  <div class="container">
    <div class="contents">
      <div class="item">
        <label>お名前:</label>
        <p><?= $result->name; ?></p>
      </div>
      <div class="item">
        <label>都道府県:</label>
        <p><?= $result->prefecture; ?></p>
      </div>
      <div class="item">
        <label>性別:</label>
        <p><?= $result->gender; ?></p>
      </div>
      <div class="item">
        <label>興味のあるジャンル:</label>
        <p><?= $result->genre; ?></p>
      </div>
      <div class="item">
        <label>その他のコメント:</label>
        <?php if ($result->comment == ""): ?>
          <p><?= "コメントはありません。" ?></p>
        <?php endif; ?>
        <p><?= $result->comment; ?></p>
      </div>
    </div>
    <a href="index.php">一覧に戻る</a>
  </div>
</body>
</html>