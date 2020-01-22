<!DOCTYPE html>
<HTML lane="ja">
    <HEAD>
        <META charset="UTF-8" />
        <TITLE>ゼイカツ会員登録</TITLE>
          <link rel="stylesheet" href="css/deco.css">
          <link rel="stylesheet" href="css/register.css">
          <script>
            function CheckPass_1() {
              var pass = document.getElementById("pass_1").value;
              var passConfirm = document.getElementById("passConfirm_1").value;
              if (pass != passConfirm){
                alert("パスワードと確認用パスワードが一致しません");
                return false;
              }else{
                return true;
              }
            };
          // -->
          </script>
    </HEAD>
    <BODY>
        <p class="login">ゼイカツ 会員登録</p>

        <form onSubmit="return CheckPass_1()" method="post" action="install.php">
          <p class="user">ユーザー名：<input type="text" name="user" required="required" placeholder="s学籍番号"/><span class="imp">必須</span><br /></p>
          <div>
          <label for="pass_1"></label>
          </div>
          <div>
          <p class="pass">パスワード：<input type="password" id="pass_1" name="pass" required="required" placeholder="大学で使用してないもの"/><span class="imp">必須</span><br /></p>
          </div>
          <div>
          <label for="passConfirm_1"></label>
        </div>
        <div>
          <p class="pass2">確認用パスワード：<input type="password" id="passConfirm_1" name="repass" required="required" placeholder="大学で使用していないもの"/><span class="imp">必須</span><br /></p>
        </div>
        <input type="submit" class="botton2" value="登録" id="submit">
        </form>
    </BODY>
</HTML>
