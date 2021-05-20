<?php
/*** 
*login.php : ログイン
*
*Author : 畑本
*Version : 0.0.1
*Created : 2021.05.10
*Update : 2021.05.10
*
*/
session_start();
require_once 'function.php';
$dbh = dbInit();    //関数呼び出し : データベースへの接続

if (isset($_POST['submit'])){
    $email = filter_input(INPUT_POST, 'user_email');         //filter_input(どこから取ってくるか（GET？POST？）,POSTの添え字)
    $pass = filter_input(INPUT_POST, 'user_pass');
    $logined = getLoginUser(['email'=>$email]);         //['email'=>$email] = ['キー'=>'値'] emailという添え字の配列のボックスに$emailの値が入っている

    if (password_verify($pass,$logined['password'])){
        $_SESSION['id'] = $logined['id'];
        $_SESSION['name'] = $logined['name'];
        header('Location:login_ok.php');
    }
    else{
        echo 'パスワードが間違っています';  //わざわざ自分のページに飛ばなくていい
        logOut();
        
    }
}
?>
<!DOCTYPE html>
<title>ログイン</title>
<h1>ログイン</h1>
<form action="" method="post">
    <dl>
        <dt>メールアドレス</dt>
            <dd>
                <input type="email" name="user_email"> 
            </dd>
        <dt>パスワード</dt>
            <dd>
                <input type="password" name="user_pass">
            </dd>
    </dl>
    <input type="submit" name="submit" value="ログイン"><br/>
    <a href="change_pw.php">パスワード変更</a>
</form>