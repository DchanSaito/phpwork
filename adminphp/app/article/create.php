<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
$pdo = new PDO('mysql:host=localhost;dbname=phpadmin;charset=utf8','root','');
$query = "insert into article (title, content, create_at, category) values (?, ?, ?, ?)";
$stmt = $pdo -> query("SET NAMES utf8;");
$sbmt = $pdo->prepare($query);
$sbmt->execute(array($_POST['title'], $_POST['content'], date('Y-m-d'),$_POST['category']));
header('Location: ./index.php');