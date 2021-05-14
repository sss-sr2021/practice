<?php
require_once 'functions.php';
    if(!empty(filter_input(INPUT_POST,"submit"))){
    $dbh = dbInit();
    $sth = $dbh-> prepare(
        'UPDATE users SET password = :password WHERE email = :email'
    );
     $ret = $sth->execute([
         'email' => filter_input(INPUT_POST,'email'),
         'password' => password_hash(filter_input(INPUT_POST,'password'),PASSWORD_DEFAULT)
     ]);
     echo("変更しました。");
}
else{
    "";
}
?>
<!DOCTYPE html>
<head>
    <table>パスワード変更</table>
</head>
<body>
    <p>メールアドレス<br />
    <form action ="" method ="POST"> 
    <input type="e-mail" name="email" /></p>
    <p>パスワード<br />
    <input type="password" name="password" /></p>
    <p>
    <input type ="submit" name="submit" value="送信" /> 
    </form>
    </p>
</body>
