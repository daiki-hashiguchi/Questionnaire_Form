<?php
require(dirname(__FILE__).'/functions.php');
require(dirname(__FILE__).'/config.php');

$results = getResults($pdo);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アンケート 一覧画面</title>
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
  <div class="container">
    <h1>アンケート一覧</h1>
    <div class="contents">
      <table>
        <tr>
          <th>お名前</th>
          <th>性別</th>
          <th>都道府県</th>
          <th>詳細</th>
        </tr>
        <?php foreach ($results as $result): ?>
        <tr>
          <td><?= $result->name ?></td>
          <td><?= $result->gender ?></td>
          <td><?= $result->prefecture ?></td>
          <td><a href="show.php?id=<?= $result->id ?>">詳細</a></td>
        </tr>
        <?php endforeach; ?>
      </table>
    </div>
    <a href="question.php">アンケート回答画面へ</a>
  </div>
</body>
</html>