<?php
    require_once 'functions.php';
    session_start();
    if(!empty(filter_input(INPUT_POST,'submit'))){
        $dbh = dbInit();  // まずは定義・代入　それにreturnした値を入れる
        //print_r($_POST);
        $email = filter_input(INPUT_POST,'email');
        $user = getloginUser(['email' => $email]);
        //print_r($user);
    if(password_verify(filter_input(INPUT_POST,'password'),$user['password'])){
        //$_SESSION["id"] = $rows[0]['id'];
        header('location: setting.php');
    }
    else{
        echo 'ログインできません。 <br />' ;
        $_SESSION['id'] = null;
    }
}
?>
<!DOCTYPE html>
<head>
    <table>ログイン</table>
</head>
<body>
    <p>メールアドレス<br />
    <form action ="" method ="POST"> 
    <input type="e-mail" name="email" /></p>
    <p>パスワード<br />
    <input type="password" name="password" /></p>
    <p>
    <input type ="submit" name="submit" value="ログイン" /> <br />
    <a href ="change_pw.php">パスワード変更</a>
    </form>
    </p>
</body>