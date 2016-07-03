<?php
session_start();
// 現在の管理者名を出力
echo $_SESSION["adminuser"];
?>
<a href="article/index.php">記事一覧</a>
<a href="article/new.php">記事作成</a>
<a href="logout.php">ログアウト</a>
