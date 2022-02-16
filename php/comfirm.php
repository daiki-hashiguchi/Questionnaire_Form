<?php
session_start();
require(dirname(__FILE__).'/functions.php');

if ($_SERVER["REQUEST_METHOD"] != "POST") {
  header("Location: question.php");
  exit();
}

if (isset($_POST["name"])) {
  $name = htmlspecialchars($_POST["name"]);
  $_SESSION['name'] = $name;
}

if (isset($_POST["comment"])) {
  $comment = htmlspecialchars(nl2br($_POST["comment"]));
  $_SESSION['comment'] = $comment;
}

if (isset($_POST["genre"]) && is_array($_POST["genre"])) {
  $genre = $_POST["genre"];
  $_SESSION['genre'] = $genre;
}

$prefecture = $_POST["prefecture"];
$_SESSION['prefecture'] = $prefecture;

$gender = $_POST["gender"];
$_SESSION['gender'] = $gender;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アンケート 確認画面</title>
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<form action="complete.php" method="post">
  <div class="form">
  <h2>アンケート 入力内容の確認</h2>
  <p>内容を確認し、「送信」ボタンを押して下さい。</p>
    <div class="contents">
      <div class="item">
        <label class="label">お名前</label>
        <p><?= $name; ?></p>
      </div>
      <div class="item">
        <label class="label">都道府県</label>
        <p><?= $prefecture; ?></p>
      </div>
      <div class="item">
        <label class="label">性別</label>
        <p><?= $gender; ?></p>
      </div>
      <div class="item">
        <label class="label">興味のあるジャンル</label>
        <p><?= implode("、", $genre); ?></p>
      </div>
      <div class="item">
        <label class="label">その他のコメント</label>
        <p><?= $comment; ?></p>
      </div>
    </div>
    <button type="submit">送信</button>
    <button type="button" onclick="history.back();">修正</a></button>
</form>
</div>
</body>
</html>