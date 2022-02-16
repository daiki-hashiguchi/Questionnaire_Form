<?php
require_once(dirname(__FILE__).'/config.php');

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アンケート 入力画面</title>
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<div class="form">
  <form action="confirm.php" method="post" id="form">
    <h1 class="title">アンケート 内容入力</h1>
    <p>各項目について入力し、「確認画面へ」ボタンをクリックして下さい。</p>
    <div class="contents">
        <div class="item">
          <label class="label">お名前</label>
          <input type="text" id="name" name="name" placeholder="例）山田 太郎">
        </div>
        <div class="item">
          <label class="label">都道府県</label>
          <select name="prefecture">
          <?php foreach($prefectures as $prefecture) : ?>
            <option value="<?= $prefecture; ?>"><?= $prefecture; ?></option>
          <?php endforeach; ?>
          </select>
        </div>
        <div class="item">
          <label class="label">性別</label>
          <?php foreach($genders as $gender) : ?>
            <input type="radio" name="gender" value="<?= $gender; ?>"><?= $gender; ?>
          <?php endforeach; ?>
        </div>
        <div class="item">
          <label class="label">興味のあるジャンル</label>
          <?php foreach($genres as $genre) : ?>
            <input type="checkbox" name="genre[]" value="<?= $genre; ?>"><?= $genre; ?>
          <?php endforeach; ?>
        </div>
        <div class="item">
          <label class="label">その他のコメント</label>
          <textarea name="comment" cols="30" rows="5" placeholder="その他質問等があればご記入ください。"></textarea>
        </div>
    </div>
    <button type="submit">確認画面へ</button>
  </form>
</div>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>