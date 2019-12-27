<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>データベース登録</title>
</head>
<body>
<?php
if (isset($_POST['user'], $_POST['pass'])) {
  $user = $_POST['user'];
  $pass = $_POST['pass'];
}

$pdo =new PDO('mysql:host=localhost; dbname=wa2;charset=utf8', '','');

if ($pdo) {
}else {
  echo 'データベースに接続できません';
}

$regist =$pdo->prepare("INSERT INTO s1612601_zeikatsu (memberId,user,pass)
VALUES(0,?,?)");

$regist->bindParam('user', $user);
$regist->bindParam('pass', $pass);

$regist->execute(array($user, $pass));

if ($regist) {
  header("Location:sucess.php");
    exit;

} else {
  echo 'エラーが発生しました。もう一度やり直してください';
}

?>
</body>
</html>
