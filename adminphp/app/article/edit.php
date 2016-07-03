<?php
$id = $_GET['id'];

$pdo = new PDO('mysql:host=localhost;dbname=phpadmin;charset=utf8','root','');
$ar = $pdo->query("SELECT * FROM article WHERE id=".$id)->fetch();
$ti = $ar['title'];
$co = $ar['content'];
$ct = $ar['category'];
?>
<form action="update.php" method="post">
  title: <input type="text" name="title" value=<?php echo $ti; ?> />
  content: <input type="text_area" name="content" value=<?php echo $co; ?> />
  <input type="hidden" name="id" value=<?php echo $id; ?> />
  <input type="submit" />
</form>
  
