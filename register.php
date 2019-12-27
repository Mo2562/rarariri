<!DOCTYPE html>
<HTML lane="ja">
    <HEAD>
        <META charset="UTF-8" />
          <link rel="stylesheet" href="css/register.css">
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
          <script type="text/javascript" src="js/register.js"></script>
        <TITLE>新規登録</TITLE>
    </HEAD>
    <BODY>
        <p>会員登録</p>
        <form method="post" id="form1" action="install.php">
            ユーザー名：<input type="text" name="user" /><span>必須</span><br />
            パスワード：<input type="password" name="pass" /><span>必須</span><br />
            確認用パスワード：<input type="password" name="pass" /><span>必須</span><br />
        <input type="submit" class="botton" value="登録" onclick="check()"/>
        <input type="reset" value="クリア"><br />
        </form>
    </BODY>
</HTML>
