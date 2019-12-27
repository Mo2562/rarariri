<!DOCTYPE html>
<HTML lane="ja">
    <HEAD>
        <META charset="UTF-8" />
        <TITLE>ログイン</TITLE>
        <link rel="stylesheet" href="css/styles.css">
    </HEAD>
    <BODY>
    <p>ログイン、新規登録</p>
    <?php
  if(isset($_GET['bad'])==1) {
    echo '<font color="red">ユーザ名またはパスワードが不正です</font>';
  }
  ?>
        <form method="post" action="check.php">
            ユーザー名：<input type="text" name="user" /><br />
            パスワード：<input type="password" name="pass" /><br />
        <input type="submit" value="ログイン" /><br />
        </form>
        <p class="no1">新規登録は<a href="http://genbu.rmme.do-johodai.ac.jp/~s1612601/zeikatsu/register.php">こちら</a>から</p>
        <script src="js/check.js"></script>
    </BODY>
</HTML>
