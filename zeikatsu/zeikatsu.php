<?php
//memberIdの取得 「ｰさんようこそ」の表示
session_start();
if (!isset($_SESSION['memberId'])) {
  header("Location: index.php"); exit;
}
$pdo = new PDO('mysql:host=localhost; dbname=wa2; charset=utf8', '','');
$pstmt2 = $pdo->prepare('SELECT user FROM s1612601_zeikatsu WHERE memberId=?');
$pstmt2->execute(array($_SESSION['memberId']));
$result2 = $pstmt2->fetch();
$numq = 11;

//s1612601_sessionで取得
$pdo = new PDO('mysql:host=localhost; dbname=wa2; charset=utf8', '','');
$pstmt = $pdo->prepare('SELECT * FROM s1612601_session WHERE memberId=?');
$pstmt->execute(array($_SESSION['memberId']));

$result = $pstmt->fetchAll();
// ここまでs1612601_sessionの取得
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>家計簿ページ</title>
  <script type="text/javascript">
    window.onbeforeunload = function(e) {
      e.returnValue = "ログアウトしますか？";
    }
  </script>
</head>
<body>
  <h1>ゼイカツページへようこそ、<?=$result2['user']?>さん</h1>

<p>購入履歴</p>
<?php
//s1612601_sessionのデータの表示　家計簿
$pdo = new PDO('mysql:host=localhost; dbname=wa2; charset=utf8', '','');
$pstmt3 = $pdo->prepare('SELECT * FROM s1612601_tag WHERE class=?');
$pstmt3 = $pdo->prepare('SELECT * FROM s1612601_subtag WHERE subclass=?');
$pstmt3->execute(array($_SESSION['memberId']));
$result3 = $pstmt->fetchAll();
//食費
$pstmt4 = $pdo->prepare('SELECT * FROM s1612601_session WHERE  memberId=? AND tag=1');
$pstmt4->execute(array($_SESSION['memberId']));
$result4 = $pstmt4->fetchAll();
//生活費
$pstmt5 = $pdo->prepare('SELECT * FROM s1612601_session WHERE  memberId=? AND tag=2');
$pstmt5->execute(array($_SESSION['memberId']));
$result5 = $pstmt5->fetchAll();
//娯楽費
$pstmt6 = $pdo->prepare('SELECT * FROM s1612601_session WHERE  memberId=? AND tag=3'); //
$pstmt6->execute(array($_SESSION['memberId']));
$result6 = $pstmt6->fetchAll();
//光熱費
$pstmt7 = $pdo->prepare('SELECT * FROM s1612601_session WHERE  memberId=? AND tag=4');
$pstmt7->execute(array($_SESSION['memberId']));
$result7 = $pstmt7->fetchAll();
//通信費
$pstmt8 = $pdo->prepare('SELECT * FROM s1612601_session WHERE  memberId=? AND tag=5');
$pstmt8->execute(array($_SESSION['memberId']));
$result8 = $pstmt8->fetchAll();
//保険費
$pstmt9 = $pdo->prepare('SELECT * FROM s1612601_session WHERE  memberId=? AND tag=6');
$pstmt9->execute(array($_SESSION['memberId']));
$result9 = $pstmt9->fetchAll();
//医療費
$pstmt10 = $pdo->prepare('SELECT * FROM s1612601_session WHERE  memberId=? AND tag=7');
$pstmt10->execute(array($_SESSION['memberId']));
$result10 = $pstmt10->fetchAll();
//交際費
$pstmt11 = $pdo->prepare('SELECT * FROM s1612601_session WHERE  memberId=? AND tag=8');
$pstmt11->execute(array($_SESSION['memberId']));
$result11 = $pstmt11->fetchAll();
//書籍費
$pstmt12 = $pdo->prepare('SELECT * FROM s1612601_session WHERE  memberId=? AND tag=9');
$pstmt12->execute(array($_SESSION['memberId']));
$result12 = $pstmt12->fetchAll();
//その他
$pstmt13 = $pdo->prepare('SELECT * FROM s1612601_session WHERE  memberId=? AND tag=10');
$pstmt13->execute(array($_SESSION['memberId']));
$result13 = $pstmt13->fetchAll();
//軽減税率内
$pstmt14 = $pdo->prepare('SELECT * FROM s1612601_session WHERE  memberId=? AND subtag=8');
$pstmt14->execute(array($_SESSION['memberId']));
$result14 = $pstmt14->fetchAll();
//軽減税率外
$pstmt15 = $pdo->prepare('SELECT * FROM s1612601_session WHERE  memberId=? AND subtag=10');
$pstmt15->execute(array($_SESSION['memberId']));
$result15 = $pstmt15->fetchAll();

   for( $i = 0 ; $i < count($result) ; $i++ ){
     echo $result[$i]["day"], ": ",$result[$i]["tag"]/*[$i]["class"]*/, ": ", $result[$i]["item"], ": ",$result[$i]["fee"], "円: ", $result[$i]["num"], "個: ",$result[$i]["feesum"],  "円: ",$result[$i]["subtag"],"<br>";
   }

   //各種合計
   $sum=0;
   for( $i = 0 ; $i < count($result) ; $i++ ){
     $sum = $sum + $result[$i]["feesum"];
   }
  //各種合計の表示
  echo '利用金額: ';
  echo $sum."円<br>";

  //tag毎の表示 食費の合計表示
  $sum1=0;
  for( $i = 0 ; $i < count($result4) ; $i++ ){
    $sum1 = $sum1 + $result4[$i]["feesum"];
  }
  //tag毎の表示 生活費の合計表示
  $sum2=0;
  for( $i = 0 ; $i < count($result5) ; $i++ ){
    $sum2 = $sum2 + $result5[$i]["feesum"];
  }
  //tag毎の表示 娯楽費の合計表示
  $sum3=0;
  for( $i = 0 ; $i < count($result6) ; $i++ ){
    $sum3 = $sum3 + $result6[$i]["feesum"];
  }
  //tag毎の表示 光熱費の合計表示
  $sum4=0;
  for( $i = 0 ; $i < count($result7) ; $i++ ){
    $sum4 = $sum4 + $result7[$i]["feesum"];
  }
  //tag毎の表示 通信費の合計表示
  $sum5=0;
  for( $i = 0 ; $i < count($result8) ; $i++ ){
    $sum5 = $sum5 + $result8[$i]["feesum"];
  }
  //tag毎の表示 保険費の合計表示
  $sum6=0;
  for( $i = 0 ; $i < count($result9) ; $i++ ){
    $sum6 = $sum6 + $result9[$i]["feesum"];
  }
  //tag毎の表示 医療費の合計表示
  $sum7=0;
  for( $i = 0 ; $i < count($result10) ; $i++ ){
    $sum7 = $sum7 + $result10[$i]["feesum"];
  }
  //tag毎の表示 交際費の合計表示
  $sum8=0;
  for( $i = 0 ; $i < count($result11) ; $i++ ){
    $sum8 = $sum8 + $result11[$i]["feesum"];
  }
  //tag毎の表示 書籍費の合計表示
  $sum9=0;
  for( $i = 0 ; $i < count($result12) ; $i++ ){
    $sum9 = $sum9 + $result12[$i]["feesum"];
  }
  //tag毎の表示 その他の合計表示
  $sum10=0;
  for( $i = 0 ; $i < count($result13) ; $i++ ){
    $sum10 = $sum10 + $result13[$i]["feesum"];
  }
//subtag毎の表示 軽減税率内の合計
  $subsum8=0;
  for( $i = 0 ; $i < count($result14) ; $i++ ){
    $subsum8 = $subsum8 + $result14[$i]["feesum"];
  }
//subtag毎の表示 軽減税率外の合計
  $subsum10=0;
  for( $i = 0 ; $i < count($result15) ; $i++ ){
    $subsum10 = $subsum10 + $result15[$i]["feesum"];
  }

  echo '食　費合計: ';
  echo $sum1."円<br>";
  echo '生活費合計: ';
  echo $sum2."円<br>";
  echo '娯楽費合計: ';
  echo $sum3."円<br>";
  echo '光熱費合計: ';
  echo $sum4."円<br>";
  echo '通信費合計: ';
  echo $sum5."円<br>";
  echo '保険費合計: ';
  echo $sum6."円<br>";
  echo '医療費合計: ';
  echo $sum7."円<br>";
  echo '交際費合計: ';
  echo $sum8."円<br>";
  echo '書籍費合計: ';
  echo $sum9."円<br>";
  echo 'その他合計: ';
  echo $sum10."円<br>";

  echo '軽減税率内の合計: ';
  echo $subsum8."円<br>";
  echo '軽減税率外の合計: ';
  echo $subsum10."円<br>";

?>





<a href="logout.php" value="louout">ログアウト</a>
</body>
</html>
