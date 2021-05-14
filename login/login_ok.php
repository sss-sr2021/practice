<?php
require_once 'functions.php';
    session_start();
    if(!isset($_SESSION["logined"])){
        header('location: login.php');
    }
            $dbh = dbInit();
            //print_r($_POST);
            $email = filter_input(INPUT_POST,'email');
            $user = $_SESSION["logined"];
?>
<!DOCTYPE html>
<head>
    <table>
        <?php
        echo $user['name'] . 'さんがログインしました';
        ?>
    </table>
</head>
<body>
    <a href ="logout.php">ログアウト</a>
</body>
</html>