<?php
session_start();
$_SESSION["adminuser"] = null;
header("Location: ./index.php");