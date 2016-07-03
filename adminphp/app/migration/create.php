<?php
try {
  $pdo = new PDO('mysql:host=localhost;dbname=phpadmin;charset=utf8','root','');
  // カテゴリ
  // 1=NEWS
  // 2=MEDIA
  $query = "CREATE TABLE article (id INT AUTO_INCREMENT, title VARCHAR(100), content VARCHAR(1000), create_at DATE, category INT(8), index(id))";
  $state = $pdo->query($query);
  if ($state == false) {
    $err = $pdo->errorInfo();
    echo $err[2]."\n";
  }
} catch (PDOException $e) {
  exit('データベース接続失敗。'.$e->getMessage());
}
$pdo = NULL;
?>
