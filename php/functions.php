<?php
function getResults($pdo) {
  $stmt = $pdo->query("SELECT * FROM formdata ORDER BY id DESC");
  $results = $stmt->fetchAll();
  return $results;
}

function showDetail($pdo) {
  $id = $_GET['id'];
  $stmt = $pdo->query("SELECT * FROM formdata WHERE id='$id'");
  $result = $stmt->fetch();
  return $result;
}
?>