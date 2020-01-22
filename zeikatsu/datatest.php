<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>データベース登録</title>
</head>
<body>
<?php
if (isset($_POST['item'],$_POST['fee'],$_POST['num'],$_POST['feesum'])) {
  $item = $_POST['item'];
$fee = $_POST['fee'];
$num = $_POST['num'];
$feesum = $_POST['feesum'];
}

$pdo =new PDO('mysql:host=localhost; dbname=wa2;charset=utf8', '','');

if ($pdo) {
}else {
  echo 'データベースに接続できません';
}

$regist =$pdo->prepare("INSERT INTO s1612601_session (sessionId,item,fee,num,feesum)
VALUES(0,?,?,?,?)");

$regist->bindParam('item', $item);
$regist->bindParam('fee', $fee);
$regist->bindParam('num', $num);
$regist->bindParam('feesum', $feesum);

$regist->execute(array($item, $fee, $num, $feenum));

/*if ($regist) {
  header("Location:process.php");
    exit;

} else {
  echo 'エラーが発生しました。もう一度やり直してください';
}
*/
?>
</body>
</html>
