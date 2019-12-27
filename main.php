<?php
session_start();
if (!isset($_SESSION['memberId'])) {
  header("Location: index.php"); exit;
}
$db = new PDO('mysql:host=localhost; dbname=wa2;charset=utf8', '','');
$pstmt2 = $db->prepare('SELECT user FROM s1612601_zeikatsu WHERE memberId=?');
$pstmt2->execute(array($_SESSION['memberId']));
$result2 = $pstmt2->fetch();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>家計簿ページ</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/styles.css">
  <script>
  $('#louout').click(function(){
    if(!confirm('本当にログアウトしますか？')){
      return false;
    }else {
      locatinon.href = 'logout.php';
    }
  });
  </script>
</head>
<body>
  <h1>ゼイカツページへようこそ、<?=$result2['user']?>さん</h1>

<form method="post" action="data.php">
<p class="in">
  <label for="in">月日</label>
  <input type="date" name="day" value="2019-12-27">
</p>

<table border="2">
<tr><th></th><th>品目</th><th>料金</th><th>個数</th><th>合計金額</th><<th>小分類（税率）</th></tr>

<tr><th>
  <select name="tag">
    <option value="">大分類</option>
    <option value="001">食費費</option>
    <option value="002">生活費</option>
    <option value="003">娯楽費</option>
    <option value="004">光熱費</option>
    <option value="005">通信費</option>
    <option value="006">保険費</option>
    <option value="007">医療費</option>
    <option value="008">交際費</option>
    <option value="009">書籍費</option>
    <option value="010">その他</option>
</select></th><td><input name="item" type="text"></td>
<td><input type="number" name="fee"  min="1" max="1000000">円</td>
<td><input type="number" name="num"  min="1" max="50" value="1">個</td>
<td><input type="number" name="feesum"  min="1" max="1000000">円</td>
 <td>
   <select name="subtag">
  <option value="">軽減税率</option>
  <option value="08">対象内</option>
  <option value="10">対象外</option>
 </select></td></tr>

 <tr><th>
   <select name="tag">
     <option value="">大分類</option>
     <option value="001">食費費</option>
     <option value="002">生活費</option>
     <option value="003">娯楽費</option>
     <option value="004">光熱費</option>
     <option value="005">通信費</option>
     <option value="006">保険費</option>
     <option value="007">医療費</option>
     <option value="008">交際費</option>
     <option value="009">書籍費</option>
     <option value="010">その他</option>
 </select></th><td><input name="item" type="text"></td>
 <td><input type="number" name="fee"  min="1" max="1000000">円</td>
 <td><input type="number" name="num"  min="1" max="50" value="1">個</td>
 <td><input type="number" name="feesum"  min="1" max="1000000">円</td>
  <td>
    <select name="subtag">
   <option value="">軽減税率</option>
   <option value="08">対象内</option>
   <option value="10">対象外</option>
  </select></td></tr>

  <tr><th>
    <select name="tag">
      <option value="">大分類</option>
      <option value="001">食費費</option>
      <option value="002">生活費</option>
      <option value="003">娯楽費</option>
      <option value="004">光熱費</option>
      <option value="005">通信費</option>
      <option value="006">保険費</option>
      <option value="007">医療費</option>
      <option value="008">交際費</option>
      <option value="009">書籍費</option>
      <option value="010">その他</option>
  </select></th><td><input name="item" type="text"></td>
  <td><input type="number" name="fee"  min="1" max="1000000">円</td>
  <td><input type="number" name="num"  min="1" max="50" value="1">個</td>
  <td><input type="number" name="feesum"  min="1" max="1000000">円</td>
   <td>
     <select name="subtag">
    <option value="">軽減税率</option>
    <option value="08">対象内</option>
    <option value="10">対象外</option>
   </select></td></tr>

   <tr><th>
     <select name="tag">
       <option value="">大分類</option>
       <option value="001">食費費</option>
       <option value="002">生活費</option>
       <option value="003">娯楽費</option>
       <option value="004">光熱費</option>
       <option value="005">通信費</option>
       <option value="006">保険費</option>
       <option value="007">医療費</option>
       <option value="008">交際費</option>
       <option value="009">書籍費</option>
       <option value="010">その他</option>
   </select></th><td><input name="item" type="text"></td>
   <td><input type="number" name="fee"  min="1" max="1000000">円</td>
   <td><input type="number" name="num"  min="1" max="50" value="1">個</td>
   <td><input type="number" name="feesum"  min="1" max="1000000">円</td>
    <td>
      <select name="subtag">
     <option value="">軽減税率</option>
     <option value="08">対象内</option>
     <option value="10">対象外</option>
    </select></td></tr>

    <tr><th>
      <select name="tag">
        <option value="">大分類</option>
        <option value="001">食費費</option>
        <option value="002">生活費</option>
        <option value="003">娯楽費</option>
        <option value="004">光熱費</option>
        <option value="005">通信費</option>
        <option value="006">保険費</option>
        <option value="007">医療費</option>
        <option value="008">交際費</option>
        <option value="009">書籍費</option>
        <option value="010">その他</option>
    </select></th><td><input name="item" type="text"></td>
    <td><input type="number" name="fee"  min="1" max="1000000">円</td>
    <td><input type="number" name="num"  min="1" max="50" value="1">個</td>
    <td><input type="number" name="feesum"  min="1" max="1000000">円</td>
     <td>
       <select name="subtag">
      <option value="">軽減税率</option>
      <option value="08">対象内</option>
      <option value="10">対象外</option>
     </select></td></tr>

     <tr><th>
       <select name="tag">
         <option value="">大分類</option>
         <option value="001">食費費</option>
         <option value="002">生活費</option>
         <option value="003">娯楽費</option>
         <option value="004">光熱費</option>
         <option value="005">通信費</option>
         <option value="006">保険費</option>
         <option value="007">医療費</option>
         <option value="008">交際費</option>
         <option value="009">書籍費</option>
         <option value="010">その他</option>
     </select></th><td><input name="item" type="text"></td>
     <td><input type="number" name="fee"  min="1" max="1000000">円</td>
     <td><input type="number" name="num"  min="1" max="50" value="1">個</td>
     <td><input type="number" name="feesum"  min="1" max="1000000">円</td>
      <td>
        <select name="subtag">
       <option value="">軽減税率</option>
       <option value="08">対象内</option>
       <option value="10">対象外</option>
      </select></td></tr>

      <tr><th>
        <select name="tag">
          <option value="">大分類</option>
          <option value="001">食費費</option>
          <option value="002">生活費</option>
          <option value="003">娯楽費</option>
          <option value="004">光熱費</option>
          <option value="005">通信費</option>
          <option value="006">保険費</option>
          <option value="007">医療費</option>
          <option value="008">交際費</option>
          <option value="009">書籍費</option>
          <option value="010">その他</option>
      </select></th><td><input name="item" type="text"></td>
      <td><input type="number" name="fee"  min="1" max="1000000">円</td>
      <td><input type="number" name="num"  min="1" max="50" value="1">個</td>
      <td><input type="number" name="feesum"  min="1" max="1000000">円</td>
       <td>
         <select name="subtag">
        <option value="">軽減税率</option>
        <option value="08">対象内</option>
        <option value="10">対象外</option>
       </select></td></tr>

       <tr><th>
         <select name="tag">
           <option value="">大分類</option>
           <option value="001">食費費</option>
           <option value="002">生活費</option>
           <option value="003">娯楽費</option>
           <option value="004">光熱費</option>
           <option value="005">通信費</option>
           <option value="006">保険費</option>
           <option value="007">医療費</option>
           <option value="008">交際費</option>
           <option value="009">書籍費</option>
           <option value="010">その他</option>
       </select></th><td><input name="item" type="text"></td>
       <td><input type="number" name="fee"  min="1" max="1000000">円</td>
       <td><input type="number" name="num"  min="1" max="50" value="1">個</td>
       <td><input type="number" name="feesum"  min="1" max="1000000">円</td>
        <td>
          <select name="subtag">
         <option value="">軽減税率</option>
         <option value="08">対象内</option>
         <option value="10">対象外</option>
        </select></td></tr>

        <tr><th>
          <select name="tag">
            <option value="">大分類</option>
            <option value="001">食費費</option>
            <option value="002">生活費</option>
            <option value="003">娯楽費</option>
            <option value="004">光熱費</option>
            <option value="005">通信費</option>
            <option value="006">保険費</option>
            <option value="007">医療費</option>
            <option value="008">交際費</option>
            <option value="009">書籍費</option>
            <option value="010">その他</option>
        </select></th><td><input name="item" type="text"></td>
        <td><input type="number" name="fee"  min="1" max="1000000">円</td>
        <td><input type="number" name="num"  min="1" max="50" value="1">個</td>
        <td><input type="number" name="feesum"  min="1" max="1000000">円</td>
         <td>
           <select name="subtag">
          <option value="">軽減税率</option>
          <option value="08">対象内</option>
          <option value="10">対象外</option>
         </select></td></tr>

         <tr><th>
           <select name="tag">
             <option value="">大分類</option>
             <option value="001">食費費</option>
             <option value="002">生活費</option>
             <option value="003">娯楽費</option>
             <option value="004">光熱費</option>
             <option value="005">通信費</option>
             <option value="006">保険費</option>
             <option value="007">医療費</option>
             <option value="008">交際費</option>
             <option value="009">書籍費</option>
             <option value="010">その他</option>
         </select></th><td><input name="item" type="text"></td>
         <td><input type="number" name="fee"  min="1" max="1000000">円</td>
         <td><input type="number" name="num"  min="1" max="50" value="1">個</td>
         <td><input type="number" name="feesum"  min="1" max="1000000">円</td>
          <td>
            <select name="subtag">
           <option value="">軽減税率</option>
           <option value="08">対象内</option>
           <option value="10">対象外</option>
          </select></td></tr>

          <tr><th>
            <select name="tag">
              <option value="">大分類</option>
              <option value="001">食費費</option>
              <option value="002">生活費</option>
              <option value="003">娯楽費</option>
              <option value="004">光熱費</option>
              <option value="005">通信費</option>
              <option value="006">保険費</option>
              <option value="007">医療費</option>
              <option value="008">交際費</option>
              <option value="009">書籍費</option>
              <option value="010">その他</option>
          </select></th><td><input name="item" type="text"></td>
          <td><input type="number" name="fee"  min="1" max="1000000">円</td>
          <td><input type="number" name="num"  min="1" max="50" value="1">個</td>
          <td><input type="number" name="feesum"  min="1" max="1000000">円</td>
           <td>
             <select name="subtag">
            <option value="">軽減税率</option>
            <option value="08">対象内</option>
            <option value="10">対象外</option>
           </select></td></tr>



</table>
<input type="submit" value="登録" /><br />
</form>




<a href="logout.php" value="louout">ログアウト</a>
</body>
</html>
