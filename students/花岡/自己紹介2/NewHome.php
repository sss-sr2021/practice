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
        <title>自己紹介/プロフィール</title>
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

                    .profilealt dt{
                        width:160px;
                        height: 50px;
                        color:white;
                        font-size:26px;
                        background-color: <?= $color3?>;
                        text-align: center;
                        border-radius:10px;
                        padding-top:15px;
                        float:left;
                        margin-left: 10px;
                        margin-top:10px;
                        margin-bottom:10px;
                    }
                </style>
            </div>
        </header>
        <main>
            <div class="profileimg">
                <img src="images/20200909-3.jpg" alt="顔写真" width="480" height="360"/>
            </div>
            <div class="profilealt">
                <dl>
                    <dt>名前</dt>
			        <dd>花岡 宗史</dd>
                    <dt>年齢</dt>
			        <dd>
                        <script>
                            function getAge(birthday) 
                            {
                                var today = new Date();
                                var tdate = ( today.getFullYear() * 10000 ) + (( today.getMonth() + 1 ) * 100 ) + today.getDate() ;
                                return( Math.floor(( tdate - birthday ) / 10000 )) ;
                            }
                            document.write (getAge(19981208));
                        </script>歳</dd>
                    <dt>好きな言葉</dt>
			        <dd>明日は明日の風が吹く</dd>
                </dl>
            </div>
        </main>
        <footer>
            <hr>
            <a href="javascript:history.back()">back</a>
			<a href="NewHome.php" target="_self">home</a>
        </footer>
    </div>
</html>
