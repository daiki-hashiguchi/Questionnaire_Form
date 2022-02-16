<?php
require(dirname(__FILE__).'/config.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] != "POST") {
  header("Location: question.php");
  exit();
}

if (isset($_SESSION["name"])) {
  $name = htmlspecialchars($_SESSION["name"]);
}

if (isset($_SESSION["comment"])) {
  $comment = htmlspecialchars(nl2br($_SESSION["comment"]));
}

if (isset($_SESSION["genre"]) && is_array($_SESSION["genre"])) {
  $genre = $_SESSION["genre"];
  $genre = implode(',', $genre);
}

$prefecture = $_SESSION["prefecture"];
$gender = $_SESSION["gender"];

$sql = "INSERT INTO formdata (name, prefecture, gender, genre, comment) VALUES (:name, :prefecture, :gender, :genre, :comment)";
$stmt = $pdo->prepare($sql);

$params = array(':name' => $name, ':prefecture' =>$prefecture, ':gender' => $gender, ':genre' => $genre, ':comment' => $comment);
$stmt->execute($params);

$_SESSION = [];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アンケート 完了画面</title>
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
  <div class="thanks">
    <div class="container">
      <h2>アンケート送信完了</h2>
      <p>ご協力ありがとうございました。</p>
      <p><a href="index.php">アンケート結果一覧へ</p>
      <p><a href="question.php">アンケートフォームへ</p>
    </div>
  </div>
</body>
</html>