<?php
$id = $_GET['id'];

$pdo = new PDO('mysql:host=localhost;dbname=phpadmin;charset=utf8','root','');
$ar = $pdo->query("SELECT * FROM article WHERE id=".$id)->fetch();
echo $ar['title'];
echo $ar['content'];
echo $ar['create_at'];
echo $ar['category'];
?>

<a href="index.php">一覧に戻る</a>