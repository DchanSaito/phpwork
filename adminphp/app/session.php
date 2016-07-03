<?php
session_start();
$_SESSION["adminuser"] = $_POST["adminuser"];
$_SESSION["pass"] = $_POST["pass"];

if($_SESSION["adminuser"] != "user" || $_SESSION["pass"] != "pass"){
  header("Location: ./index.php");
} else {
  header("Location: ./home.php");
}
?>
