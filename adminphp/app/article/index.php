<?php
function show_article($id, $title) {
  echo '<a href="show.php?id='.($id+1).'">'.$title.'</a>';
  echo '<a href="delete.php?id='.($id+1).'">削除</a>';
  echo '<a href="edit.php?id='.($id+1).'">編集</a>';  
}

$pdo = new PDO('mysql:host=localhost;dbname=phpadmin;charset=utf8','root','');
$st = $pdo->query("SELECT * FROM article");
$posts = $st->fetchAll();
echo '<a href="new.php">新規作成</a>';
for ($i = 0; $i < count($posts); $i++) {
  show_article($i, $posts[$i]['title']);
}
?>