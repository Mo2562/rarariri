<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>データベース登録</title>
</head>
<body>
<?php
/*↓ここからmemberIdとデータベースの結び付け SESSIONで受け取り*/
session_start();
if (!isset($_SESSION['memberId'])) {
  header("Location: login.php"); exit;
}
/*↑ここまで、memberIdに関するプログラム*/

$numq=$_POST['numq']; //各テーブルの項目の受け取り

for( $i = 1 ; $i <= $numq ; $i++ ){
 if (isset($_POST['day'.(string)$i],/*$_POST['memberId'],*/$_POST['tag'.(string)$i],$_POST['item'.(string)$i],$_POST['fee'.(string)$i],$_POST['num'.(string)$i],$_POST['feesum'.(string)$i],$_POST['subtag'.(string)$i])) {
    $day = $_POST['day'.(string)$i];
     /*$memberId = $_POST['memberId'];*/
    $tag = $_POST['tag'.(string)$i];
    $item = $_POST['item'.(string)$i];
    $fee = $_POST['fee'.(string)$i];
    $num = $_POST['num'.(string)$i];
    $feesum = $_POST['feesum'.(string)$i];
    $subtag = $_POST['subtag'.(string)$i];
   echo 'パラメータはokです';
  }else {
   echo 'パラメータの受け取りに失敗しました';
  }


/*echo $day;
echo $_POST['tag1'];
echo $_POST['item1'];
echo $_POST['fee1'];
echo $_POST['num1'];
echo $_POST['feesum1'];

echo "2列目<br />";
echo $day;
echo $_POST['tag2'];
echo $_POST['item2'];
echo $_POST['fee2'];
echo $_POST['num2'];
echo $_POST['feesum2'];
echo "<br />";
*/
$pdo =new PDO('mysql:host=localhost; dbname=wa2;charset=utf8', '','');

if ($pdo) {
  echo 'データベースの接続に成功しました';
}else {
  echo 'データベースに接続できません';
}

$in=$regist =$pdo->prepare("INSERT INTO s1612601_session (day,memberId,tag,item,fee,num,feesum,subtag)
VALUES(?,?,?,?,?,?,?,?)");

if ($in) {
  echo 'INSERTできています';
}else {
  echo 'INSERTできていません';
}

//$regist->bindParam('day', $day);
//$regist->bindParam('memberId', $_SESSION['memberId']);
//$regist->bindParam('tag'.(string)$i, $tag);
//$regist->bindParam('item'.(string)$i, $item);
//$regist->bindParam('fee'.(string)$i, $fee);
//$regist->bindParam('num'.(string)$i, $num);
//$regist->bindParam('feesum'.(string)$i, $feesum);
//$regist->bindParam('subtag'.(string)$i, $subtag);

$test=$regist->execute(array($day,$_SESSION['memberId'],$tag,$item,$fee,$num,$feesum,$subtag));

}

/*if($test) {
  echo 'sqlは成功です';
}else{
  echo 'sqlは失敗です<br />';
}

echo "日付<br />";
echo $day;
echo "メンバーID";
/*echo $memberId*/
//echo "タグ<br />";
//echo $tag;
//echo "アイテム<br />";
//echo $item;
//echo "値段<br />";
//echo $fee;
//echo "数<br />";
//echo $num;
//echo "合計金額<br />";
//echo $feesum;
//echo "サブタグ<br />";
//echo $subtag;
//echo "<br />";

//echo '受け取りに成功しました';
//if ($regist) {
  //echo '受け取りに成功しました';
//}else {
  //echo '受け取りに失敗しました';
//}

if ($regist) {
  header("Location:process.php");
    exit;

} else {
  echo 'エラーが発生しました。もう一度やり直してください';
}

?>
</body>
</html>
