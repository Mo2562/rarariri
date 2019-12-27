<?php

    try{
        $pdo = new PDO('mysql:host=localhost;dbname=wa2;charset=utf8', '','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    } catch(PDOException $exception) {
      echo('PDOクラスによる接続に失敗しました。 '.$exception->getMessage());
    }

    try{
		$sql = "SELECT * FROM s1612601_zeikatsu WHERE user = :user AND pass = :pass";
		$stmh = $pdo -> prepare($sql);
		$stmh -> bindValue(':user', isset($_POST['user']),PDO::PARAM_STR);
		$stmh -> bindValue(':pass', isset($_POST['pass']),PDO::PARAM_STR);
		$stmh -> execute();
		$count = $stmh -> rowCount();
		if ($count==0) {
          $pdo -> beginTransaction();
 	  	  $sql = "INSERT INTO s1612601_zeikatsu (user,pass)VALUES(:user,:pass)";
	      $stmh = $pdo -> prepare($sql);
	      $stmh -> bindValue(':user', isset($_POST['user']),PDO::PARAM_STR);
	      $stmh -> bindValue(':pass', isset($_POST['pass']),PDO::PARAM_STR);
	      $stmh -> execute();
	      $pdo -> commit();
	    }
	      echo('ログインしました');
    } catch(PDOException $exception) {
      echo('失敗しました。'.$exception->getMessage());
    }





?><!DOCTYPE html>
<HTML lane="ja">
    <HEAD>
        <META charset="UTF-8" />
        <TITLE>認証</TITLE>
<meta http-equiv="Refresh" content="5, http://genbu.rmme.do-johodai.ac.jp/~s1612601/zeikatsu/main.php">
    </HEAD>
    <BODY>
	<p>5秒後に表示されます</p>
        ページが更新されない場合は、<a href="http://genbu.rmme.do-johodai.ac.jp/~s1612601/zeikatsu/main.php">ここ</a>をクリックしてください

    </BODY>
</HTML>
