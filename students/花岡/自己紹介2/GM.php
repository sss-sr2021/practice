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
        <title>自己紹介/趣味/ゲーム</title>
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
            <div class="tp">
                <div class="tpheader" >
                    <img src="images/4425617_s.jpg" alt="ゲーム" width="1200" height="675"/>
                    <div class="mask">
                        <div class="caption">Playing GAME</div>
                    </div>
                </div>
                <div class="tptitle">
                    好きなゲーム
                </div>
                <div class="tpimgs">
                    <div class="tptop">
                        <div class="tpleft">
                            <img src="images/staralies.jpg" onclick="location.href='https://www.kirby.jp/'" alt="星のカービィ" title = "星のカービィ" width="600" height="325"/>
                        </div>
                        <div class="tpright">
                            <img src="images/gyakutennsaibann.png" onclick="location.href='https://www.capcom.co.jp/gyakutensaiban/'" alt="逆転裁判" title = "逆転裁判" width="600" height="325"/>
                        </div>
                    </div>
                    <div class="tpbottom">
                        <div class="tpleft">
                            <img src="images/apex.jpg" onclick="location.href='https://www.ea.com/ja-jp/games/apex-legends'" alt="APEX LEGENDS" title = "APEX LEGENDS" width="600" height="325"/>
                        </div>
                        <div class="tpright">
                            <img src="images/valorant.jpg" onclick="location.href='https://playvalorant.com/ja-jp/'" alt="VALORANT" title = "VALORANT" width="600" height="325"/>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="tplinks">
                    <div class="tptitle">
                        その他の趣味
                    </div>
                    <div class="tpleft">
                        <img src="images/4047264_s.jpg" alt="おえかき" onclick="location.href='./DR.php'"  width="600" height="325"/>
                    </div>
                    <div class="tpright">
                        <img src="images/3719644_s.jpg" alt="カラオケ" onclick="location.href='./KO.php'"width="600" height="325"/>
                    </div>
                </div>
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