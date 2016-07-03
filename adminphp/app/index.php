<?php
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;
//if (preg_match('/^[数字3桁]\.[数字3桁]\.[数字2けた]\.[0-9]{3}/', $ip)
//{
?>
<html>
    <head>
        <title>ログイン</title>
    </head>
    <body>
        <form action="session.php" method = "post">
            ID<input type ="text" name="adminuser" value = ""><br />
            パスワード<input type = "password" name="pass" value = ""><br />
            <input type="submit" name ="login" value = "ログイン">
        </form>
    </body>
</html>
<?php
  //  } else {
  ?>
  <?php ここに例外処理 ?>

  <?php
  //}
?>
  