<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>データベース登録</title>
</head>
<body>
<?php
if (isset($_POST['day'],$_POST['tag'],$_POST['item'],$_POST['fee'],$_POST['num'],$_POST['feesum'],$_POST['subtag'])) {
  $day = $_POST['day'];
  $tag = $_POST['tag'];
  $item = $_POST['item'];
  $fee = $_POST['fee'];
  $num = $_POST['num'];
  $feesum = $_POST['feesum'];
  $subtag = $_POST['subtag'];
}

$pdo =new PDO('mysql:host=localhost; dbname=wa2;charset=utf8', '','');

if ($pdo) {
}else {
  echo 'データベースに接続できません';
}

$regist =$pdo->prepare("INSERT INTO s1612601_session (sessionId,day,tag,item,fee,num,feesum,subtag)
VALUES(0,?,?,?,?,?,?,?)");

$regist->bindParam('day', $day);
$regist->bindParam('tag', $tag);
$regist->bindParam('item', $item);
$regist->bindParam('fee', $fee);
$regist->bindParam('num', $num);
$regist->bindParam('feesum', $feesum);
$regist->bindParam('subtag', $subtag);

$regist->execute(array($day,$tag,$item,$fee,$num,$feesum,$subtag));

if ($regist) {
  header("Location:process.php");
    exit;

} else {
  echo 'エラーが発生しました。もう一度やり直してください';
}

?>
</body>
</html>
