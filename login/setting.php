<?php
require_once 'functions.php';
    session_start();
    if(!isset($_SESSION["logined"])){
        header('location: login.php');
    }
            $dbh = dbInit();
            $email = filter_input(INPUT_POST,'email');
            $user = $_SESSION["logined"];
            if(!empty(filter_input(INPUT_POST,"submit"))){
            $sth = $dbh-> prepare(
                'UPDATE users SET name = :name WHERE id = :id'
            );
             $ret = $sth->execute([
                 'name' => filter_input(INPUT_POST,'name'),
                 'id' => filter_input(INPUT_POST,'id')
             ]);
            }
?>
<!DOCTYPE html>
<head>
    <table>
        <title>マイページ</title>
    </table>
</head>
<body>
    <p>名前<br />
    <form action ="" method ="POST"> 
    <input type="text" name="name" value="<?= $user["name"] ?>" /></p>
    <p>出身地<br />
    <input type="text" name="place" /></p>
    <p>userID<br />
    <input type="hidden" name="id" value="<?= $user["id"] ?>"/></p>
    <p>
    <input type ="submit" name="submit" value="変更" /> 
    </form>
    </p>
</body>
</html>