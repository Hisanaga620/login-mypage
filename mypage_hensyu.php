<?php
mb_internal_encoding("utf8");
session_start();

if($_POST['rand']<1 || $_POST['rand']>10){
    header("Location:login_error.php");
}
?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>マイページ編集</title>
        <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>
    
    <body>
        <header>
            <img src="4eachblog_logo.jpg" class="logo">
        </header>
        
        <main>
            <div class="box">
                <div class="contents">
                    <h2>会員情報</h2>
                    <p>こんにちは！　<?php echo $_SESSION['name'] ?>さん</p>
                    <img src="<?php echo $_SESSION['picture'] ?>" class="picture">
                    <form method="post" action="mypage_update.php">
                        <div class="text">
                            <p>氏名：<input type="text" value="<?php echo $_SESSION['name'] ?>" name="name"></p>
                            <p>メール：<input type="text" value="<?php echo $_SESSION['mail'] ?>" name="mail"></p>
                            <p>パスワード：<input type="text" value="<?php echo $_SESSION['password'] ?>" name="password"></p>
                        </div>
                        <div class="comments">
                            <textarea rows="7" cols="40" name="comments"><?php echo $_SESSION['comments'] ?></textarea>
                        </div>
                        <div class="submit">
                            <input type="submit" value="この内容に変更する" class="button">
                        </div>
                    </form>
                </div>
            </div>
        </main>
        
        <footer>
            ©2018 InterNous.inc All rights reserved
        </footer>
    </body>

</html>