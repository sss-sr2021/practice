<?php
/*** 
*setting.php : ログインしているユーザー情報を変更
*
*Author : 畑本
*Version : 0.0.1
*Created : 2021.05.10
*Update : 2021.05.19
*
*/
session_start();
require_once 'function.php';
$dbh = dbInit();

if (isset($_POST['submit'])){
    /***
    * 名前の変更
    */
    $sth = $dbh->prepare(
        'UPDATE users SET name = :name WHERE id = :id'
    );
    $ret = $sth->execute([
        'id' => $_POST['userID'],
        'name' => $_POST['name']
    ]);
    $_SESSION['name'] = $_POST['name'];
    
    /***
    * 出身地の変更
    */
    metaInsertOrUpdate($_POST['userID'],'出身地',$_POST['place']);

    /***
    * 背景色の更新、変更
    */

    metaInsertOrUpdate($_POST['userID'],'背景色',$_POST['bgcolor']);
    /***
    * 生年月日の更新、変更
    */
    metaInsertOrUpdate($_POST['userID'],'生年月日',$_POST['birthday']);

    echo '変更しました';
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>おさらい</title>
        <script src="/jquery-3.6.0.js"></script>
        <!-- jQueryは上から順に読み込む  この時点ではまだ、下のinputなどは読み込まれていない-->
        <script type="text/javascript">
            $(function(){  //ここのfunctionはこのページを全部読み込んだらという意味になる documentjQuery～みたいなのが省略されてる
                $("#bgcolor").click(function(){
                var bgC = $("#bgcolor").val();
                $('.sample').css('background-color',bgC);
                });
            });
        </script>
    </head>
    <body class="sample" bgcolor="">
        <h1>マイページ</h1>
        <form action="" method="post">
        <dl>
        <dt>名前：</dt>
            <dd>
                <input type="text" name="name" value="<?= $_SESSION['name']?>">   <!-- $_SESSION['name'] = 今のログイン情報（名前）を表示-->
            </dd>
        <dt>出身地：</dt>
            <dd>
                <input type="text" name="place" value="<?= $_SESSION['set']['出身地']?>">   <!-- $_SESSION['set']['meta_value'] = 今のログイン情報（出身地）を表示-->
            </dd>
        </dl>
            <dd>
                <input type="hidden" name="userID" value="<?= $_SESSION['id']?>">   <!-- $_SESSION['set']['user_id'] = 今のログイン情報（id）を表示-->
            </dd>
        </dl>
        背景色：<input type="color" name="bgcolor" id="bgcolor" value="<?= $_SESSION['set']['背景色'] ?>"/><br>
        生年月日：<input type="date" name="birthday" id="birthday" value="<?= $_SESSION['set']['生年月日'] ?> " />
        <input type="submit" name="submit" value="変更">
        </form>
    </body>
</html>