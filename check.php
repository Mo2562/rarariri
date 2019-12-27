<?php
// データベース接続
$db = new PDO('mysql:host=localhost; dbname=wa2;charset=utf8', '','');
// ユーザ名とパスワードの組を検索
$pstmt1 = $db->prepare("SELECT memberId FROM s1612601_zeikatsu
                        WHERE user=? AND pass=?");
$pstmt1->execute(array($_POST['user'],$_POST['pass']));
$result1 = $pstmt1->fetch();
if ( $result1 ){
  session_start();
  $_SESSION['memberId'] = $result1['memberId'];
  header("Location: result.php"); exit;
}
else{
  header("Location: login.php?bad=1"); exit;
}
?>
