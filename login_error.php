<?php

session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}

?>

<!DOCTYPE HTML>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <title>ログイン</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
        </header>
        
        <main>
            <form action="mypage.php" method="post">
                <p>メールアドレスまたはパスワードが間違っています。</p>
                <div class="form_contents">
                    <div class="content">
                        メールアドレス<br>
                        <input type="text" name="mail" value="<?php if(isset($_COOKIE['mail'])){echo $_COOKIE['mail'];} ?>">
                    </div>
                    <div class="content">
                        パスワード<br>
                        <input type="password" name="password" value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];} ?>">
                    </div>
                    <div class="content">
                        <label><input type="checkbox" name="login_keep" value="login_keep" <?php if(isset($_COOKIE['login_keep'])){echo "checked='checked'";} ?>>ログイン状態を保持する</label>
                    </div>
                    <div class="login">
                        <input type="submit" class="button">
                    </div>
                </div>
            </form>
        </main>
        
        <footer>
            ©2018 InterNous.inc All rights reserved
        </footer>
    </body>
</html>