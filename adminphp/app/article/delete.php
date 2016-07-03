<?php
$pdo = new PDO('mysql:host=localhost;dbname=phpadmin;charset=utf8','root','');
$id = $_GET['id'];
$query = 'DELETE FROM article WHERE id = ?';
$sbmt = $pdo->prepare($query);
$sbmt->execute(array($id));
header('Location: ./index.php');
