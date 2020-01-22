<!DOCTYPE html>
<HTML lane="ja">
    <HEAD>
        <META charset="UTF-8" />
        <TITLE>ログイン</TITLE>
        <link rel="stylesheet" href="css/deco.css">
        <link rel="stylesheet" href="css/login.css">
    </HEAD>
    <BODY>
    <p class="login">ゼイカツ ログイン認証</p>
    <p class="error"><?php
  if(isset($_GET['bad'])==1) {
    echo '<font color="red">ユーザ名またはパスワードが不正です</font>';
  }
  ?></p>
  　　　<div id="form1">
        <form method="post" action="check.php">
            <p class="user">ユーザー名：<span class="formuser"><input type="text" name="user" required="required" placeholder="s学籍番号"/></span><br /></p>
            <p class="pass">パスワード：<span class="formpass"><input type="password" name="pass" required="required" placeholder="パスワード"/></span><br /></p>
        <p class="submit"><input type="submit" class="botton1" value="ログイン" /><br /></p>
        </form>
        <p class="no1">新規登録は<a href="http://genbu.rmme.do-johodai.ac.jp/~s1612601/zeikatsu/register.php">こちら</a>から</p>

    </BODY>
</HTML>
