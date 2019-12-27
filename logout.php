<?php
  session_start();
  $_SESSION = array();
  session_destroy();
  header("Location: login.php"); exit;
?><!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
</body>
</html>
