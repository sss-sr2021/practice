<?php
    session_start();
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
    $color2='aqua';
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="description" content="花岡の自己紹介" />
        <meta name="keywords" content="新人研修,HTML,演習問題,自己紹介" />
        <title>自己紹介/趣味</title>
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
                    .hbbtn{
                        width:400px;
                        height: 225px;
                        background-color: <?= $color3?>;
                        float:left;
                        color:white;
                        font-size:80px;
                        margin:10px;
                    }
                </style>
            </div>
        </header>
        <main>
            <div class="hbimgs">
                <div class="hbbtn" width="400" height="225">趣味</div>
                <div class="gmbtn" onclick="location.href='./GM.php'">
                    <img src="images/4425617_s.jpg" alt="ゲーム" width="400" height="225"/>
                </div>
                <div class="drbtn" onclick="location.href='./DR.php'">
                    <img src="images/4047264_s.jpg" alt="おえかき" width="400" height="225"/>
                </div>
                <div class="kobtn" onclick="location.href='./KO.php'">
                    <img src="images/3719644_s.jpg" alt="カラオケ" width="400" height="225"/>
                </div>
                <br />
            </div>
        </main>
        <footer>
            <br />
            <hr>
            <a href="javascript:history.back()">back</a>
			<a href="NewHome.php" target="_self">home</a>
        </footer>
    </div>
    </html>