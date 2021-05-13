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
        <title>自己紹介/出身地</title>
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
                    th{
                        background-color:<?= $color3?>;
                        color:white;
                    }
                </style>
            </div>
        </header>
        <main>
			<table border="1">
				<tr>
					<th colspan="3">姫路の個人的いいところ</th>
				</tr>
				
				<tr>
					<td rowspan="2">観光地</td>
					<td><a href="https://www.city.himeji.lg.jp/castle/" target=_blank>姫路城</a></td>
					<td><a href="https://www.city.himeji.lg.jp/castle/" target=_blank><img src="images/himejijou.jpeg" alt="姫路城" width="240" height="180"/></a></td>
				</tr>
				
				<tr>
					<td><a href="http://www.himeji-machishin.jp/ryokka/kokoen/" target=_blank>好古園</a></td>
					<td><a href="http://www.himeji-machishin.jp/ryokka/kokoen/" target=_blank><img src="images/koukoen.jpg" alt="好古園" width="240" height="180"/></a></td>
				</tr>
				
			<tr>
				<td rowspan="2">グルメ</a></td>
				<td><a href="https://tabelog.com/hyogo/A2805/A280501/28048354/" target=_blank>姫路タンメン</td>
				<td><a href="https://tabelog.com/hyogo/A2805/A280501/28048354/" target=_blank><img src="images/tanmen.jpg" alt="姫路タンメン" width="240" height="180"/></a></td>
			</tr>
			
			<tr>
				<td><a href="https://www.muche.jp/" target=_blank>ムッシュ</a></td>
				<td><a href="https://www.muche.jp/" target=_blank><img src="images/muche.jpg" alt="ムッシュ" width="240" height="180"/></a></td>
			</tr>
			
			</table>
        </main>
        <footer>
            <hr>
            <a href="javascript:history.back()">back</a>
			<a href="NewHome.php" target="_self">home</a>
        </footer>
    </div>
</html>