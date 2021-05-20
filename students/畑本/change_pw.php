<?php
/*** 
*change_pw.php : パスワード変更
*
*Author : 畑本
*Version : 0.0.1
*Created : 2021.05.10
*Update : 2021.05.10
*
*/
require_once 'function.php';
$dbh = dbInit();

if (isset($_POST['submit'])){
    $hash = password_hash($_POST['user_pass'],PASSWORD_DEFAULT);
    $sth = $dbh->prepare(            //実行したい内容 シナリオみたいな
        'UPDATE users SET password = :password WHERE email = :email'    //emailが同じだったらusersテーブルにパスワードを登録
    );
    $ret = $sth->execute([           //登場人物
        'password' => $hash,
        'email' => $_POST['user_email']
    ]);
    echo 'DBの「password」列にパスワードを登録・変更しました';
} else{
    echo '';
}
?>

<!DOCTYPE html>
<title>パスワード変更</title>
<h1>パスワード変更</h1>
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
    <input type="submit" name="submit" value="送信">
</form>