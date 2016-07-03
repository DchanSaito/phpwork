<?php
$pdo = new PDO('mysql:host=localhost;dbname=phpadmin;charset=utf8','root','');
$ti = $_POST['title'];
$co = $_POST['content'];
$id = $_POST['id'];

$query = 'UPDATE article SET title=?, content=? WHERE id = ?';
$sbmt = $pdo->prepare($query);
$sbmt->execute(array($ti, $co, $id));

header('Location: ./show.php?id='.$id);
