<?php
    $color2='aqua';
    session_start();
    if(isset($_POST['submit'])){
        $_SESSION['tmcolor']=$_POST['color'];
        $color1=$_SESSION['tmcolor'];
    }
    if(isset($_SESSION['tmcolor'])){
        $color1=$_SESSION['tmcolor'];
    }
    else{
        $color1='blue';
    }
    $color3='';
    switch($color1){
        case 'blue':
            $color3='navy';
            break;
        case 'red':
            $color3='#880000';
            break;
        case 'green':
            $color3='#009966';
            break;
        case 'orange':
            $color3='#FF6347';
            break;
        case 'pink':
            $color3='#FF82B2';
            break;
        case 'black':
            $color3='#444444';
            break;
        default:
            $color3='navy';
    }
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="花岡の自己紹介" />
        <meta name="keywords" content="新人研修,HTML,演習問題,自己紹介" />
        <title>自己紹介/カスタマイズ</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <div class="container">
        <header>
            <div class="tab">
                <button class="tableft" onclick="location.href='./NewHome.php'">PROFILE</button>
                <button class="tabmid" onclick="location.href='./NewFrom.php'">HOME TOWN</button>
                <button class="tabright" onclick="location.href='./NewHobby.php'">HOBBY</button>
                <button class="tabcustom" onclick="location.href='./custom.php'">CUSTOM</button>
                <style>

                    .tab {
                        overflow: hidden;
                        background-color: <?= $color1?>;
                        text-align: center;
                        display:flex;
                    }

                    .tab button {
                        background-color: inherit;
                        float: left;
                        border: none;
                        outline: none;
                        cursor: pointer;
                        padding: 50px 20px;
                        transition: 0s;
                        font-size: 30px;
                        color:white;
                    }

                    .tab button:hover {
                        background-color: <?= $color3?>;
                    }
                </style>
            </div>
        </header>
        <main>
            <div class="tptitle">
                テーマカラー
            </div>
            <form method="post">
                <div class="tmcolors">
                    <label for="red">
                        <input type="radio" name="color" value="red" checked="checked">
                        RED
                    </label>
                    <label for="blue">
                        <input type="radio" name="color" value="blue">
                        BLUE
                    </label>
                    <label for="green">
                        <input type="radio" name="color" value="green">
                        GREEN
                    </label>
                    <label for="orange">
                        <input type="radio" name="color" value="orange">
                        ORANGE
                    </label>
                    <label for="pink">
                        <input type="radio" name="color" value="pink">
                        PINK
                    </label>
                    <label for="black">
                        <input type="radio" name="color" value="black">
                        BLACK
                    </label>
                    <button type="submit" name="submit">決定</button>
                </div>
            </form>
        </main>
        <footer>
            <hr>
            <a href="javascript:history.back()">back</a>
			<a href="NewHome.php" target="_self">home</a>
        </footer>
    </div>
</html>
