<?php
/*** 
*login_ok.php : ログインOK
*
*Author : 畑本
*Version : 0.0.1
*Created : 2021.05.10
*Update : 2021.05.10
*
*/
session_start();
    if (empty($_SESSION['id'])){
        header('Location:login.php');
    }
?>
<!DOCTYPE html>
<p><?= $_SESSION['name'] ?>さんがログインしました</p>
<a href="logout.php">ログアウト</a>
</form>