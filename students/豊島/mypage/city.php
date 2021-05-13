<!DOCTYPE html>
<html lang = "ja">
	<head>
		<meta charset = "UTF-8"/>
		<title>自己紹介</title>
		<meta name = "discription" content = "説明文" />
		<meta name = "keyword" content = "キーワード" />
		<link rel = "stylesheet" href="css/style.css">
			
		<link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">	
	</head>
	
	<body class = "city">
		<header id = "header">
			<h2 class="title"><a href="index.php">MY&nbsp;HOME&nbsp;PAGE</a></h2>
		<nav class="navi">
			<ul>
				<li><a href="index.php">PROFILE</a></li>
				<li><a href="fav.php">MY&nbsp;FAVORITE</a></li>
				<li><a href="city.php">KAKOGAWA&nbsp;CITY</a></li>
			</ul>
		</nav>
		</header>
	<main>
		<p class="pagetitle">KAKOGAWA&nbsp;CITY</p>
		<form method="get" class="formmenu">
			<select name="menu">
			<option hidden>選択してください</option>
			<option value="選択肢1">一覧</option>
			<option value="選択肢2">名物</option>
			<option value="選択肢3">おすすめごはんやさん</option>
			<option value="選択肢4">施設</option>
			</select>
			<input type = "submit" name = "submit" value = "決定" />
		</form>
      
        <table>
			<caption>加古川市のいいところをご紹介</caption>
			<tr>
				<th>項目</th>
				<th>内容</th>
				<th>地図</th>
			</tr>


			<?php if(@ $_REQUEST['submit']){
					if($_REQUEST['menu']=="選択肢1"){ ?>
						<tr>
							<td id="koumoku1">名物</td>
							<td id="tdimg1" >かつめしとは<br />
								洋皿に盛ったご飯の上にビフカツ（または豚カツ）をのせ、
								ドミグラス風のたれをかけ、ゆでたキャベツを添えた料理。<br />
								<a href ="http://kako-navi.jp/katsumeshi/character.html" target = "_blank">&lt;&lt;&lt;&nbsp;かつめしのキャラクターはこちら</a>
							</td>
							<td>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13114.625527846922!2d134.81497498189043!3d34.7390548213841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3554d9b06b018dfb%3A0x148861a70401ede3!2z5pys5a6244GL44Gk44KB44GX5Lqt!5e0!3m2!1sja!2sjp!4v1618533712634!5m2!1sja!2sjp" 
									width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</td>
						</tr>
						<tr>
							<td id="koumoku2" lowspan="3">ご飯</td>
							<td id="tdimg2">THE&nbsp;GARDEN<br />
								美味しくておしゃれなお調理が楽しめます。<br />
							<a href ="https://tabelog.com/hyogo/A2804/A280402/28047511/" target = "_blank">&lt;&lt;&lt;&nbsp;食べログはこちら</a>
							</td>
							<td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.4719590451045!2d134.9118326152334!3d34.74370218042343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355529e3714034d7%3A0xdcb5bc5ccaf78c2a!2sTHE%20GARDEN%20cafe%26sweets!5e0!3m2!1sja!2sjp!4v1620018173061!5m2!1sja!2sjp" 
								width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</td>
						</tr>
						<tr>
							<td id="koumoku2"></td>
							<td id="tdimg3">ダラット<br />
								タイ、ベトナム、インドネシア料理が楽しめます。<br />
							<a href ="https://tabelog.com/hyogo/A2804/A280402/28031321/" target = "_blank">&lt;&lt;&lt;&nbsp;食べログはこちら</a>
							</td>
							<td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3277.909429035405!2d134.82410721462122!3d34.757874280419884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3554d8441617ec4b%3A0x5ef0c215c0075c31!2z44Ki44K444Ki44Oz44OA44Kk44OL44Oz44KwIOODgOODqeODg-ODiCBEYSBMYXQ!5e0!3m2!1sja!2sjp!4v1620021279930!5m2!1sja!2sjp"
								width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</td>
						</tr>
						<tr>
							<td id="koumoku2"></td>
							<td id="tdimg4">パティスリー&amp;カフェ&nbsp;ピケ<br />
								かわいいハリネズミのケーキが楽しめます。<br />
							<a href ="https://tabelog.com/hyogo/A2804/A280402/28047324/" target = "_blank">&lt;&lt;&lt;&nbsp;食べログはこちら</a>
							</td>
							<td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.4919565430714!2d134.82072251523337!3d34.74319828042357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3554d9b2045879f9%3A0x615a26cf542c32a2!2z44OR44OG44Kj44K544Oq44O8JuOCq-ODleOCpyDjg5TjgrE!5e0!3m2!1sja!2sjp!4v1620369469560!5m2!1sja!2sjp" 
								width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</td>
						</tr>
						<tr>
							<td id="koumoku3" lowspan="3">施設</td>
							<td id="tdimg5">ウェルネスパーク<br />
								加古川市で一番大きな図書館です。自然豊かな施設内にはスポーツジムもあります。<br />
							<a href ="https://www.kakogawawellness.jp/" target = "_blank">&lt;&lt;&lt;&nbsp;公式サイトはこちら</a>
							</td>
							<td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3276.3519625896474!2d134.83576494997908!3d34.797085985463056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355527c3ebc77ef1%3A0xb8d342dda537a161!2z5Yqg5Y-k5bed44Km44Kn44Or44ON44K544OR44O844Kv!5e0!3m2!1sja!2sjp!4v1620025384552!5m2!1sja!2sjp"
								width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</td>
						</tr>
						<tr>
							<td id="koumoku3"></td>
							<td id="tdimg6">ニッケパークタウン<br />
								加古川駅からのアクセスも良く、食料品、衣類、家電までなんでもそろいます。<br />
							<a href ="https://nikke-parktown.com/" target = "_blank">&lt;&lt;&lt;&nbsp;公式サイトはこちら</a>
							</td>
							<td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3277.4571030001!2d134.8354633070524!3d34.7692662934697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3554d80dc8b79c33%3A0xff9fe0b6da448972!2z44OL44OD44Kx44OR44O844Kv44K_44Km44Oz!5e0!3m2!1sja!2sjp!4v1620025745906!5m2!1sja!2sjp"
								width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</td>
						</tr>
						<tr>
							<td id="koumoku3"></td>
							<td id="tdimg7">鶴林寺<br />
								国宝。聖徳太子開基伝承をもつ寺院の1つ。<br />
							<a href ="https://www.kakurinji.or.jp/" target = "_blank">&lt;&lt;&lt;&nbsp;公式サイトはこちら</a>
							</td>
							<td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.102191810634!2d134.83033931523363!3d34.7530184804212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3554d83810fdcc13%3A0xab6a1e065dcfa825!2z6ba05p6X5a-6!5e0!3m2!1sja!2sjp!4v1620373786718!5m2!1sja!2sjp" 
								width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</td>
						</tr>
					<?php }

					elseif($_REQUEST['menu']=="選択肢2"){ ?>
						<tr>
							<td id="koumoku1">名物</td>
							<td id="tdimg1" >かつめしとは<br />
								洋皿に盛ったご飯の上にビフカツ（または豚カツ）をのせ、
								ドミグラス風のたれをかけ、ゆでたキャベツを添えた料理。<br />
								<a href ="http://kako-navi.jp/katsumeshi/character.html" target = "_blank">&lt;&lt;&lt;&nbsp;かつめしのキャラクターはこちら</a>
							</td>
							<td>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13114.625527846922!2d134.81497498189043!3d34.7390548213841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3554d9b06b018dfb%3A0x148861a70401ede3!2z5pys5a6244GL44Gk44KB44GX5Lqt!5e0!3m2!1sja!2sjp!4v1618533712634!5m2!1sja!2sjp" 
									width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</td>
						</tr>
					<?php }

					elseif($_REQUEST['menu']=="選択肢3"){ ?>
					
						<tr>
							<td id="koumoku2" lowspan="3">ご飯</td>
							<td id="tdimg2">THE&nbsp;GARDEN<br />
								美味しくておしゃれなお調理が楽しめます。<br />
							<a href ="https://tabelog.com/hyogo/A2804/A280402/28047511/" target = "_blank">&lt;&lt;&lt;&nbsp;食べログはこちら</a>
							</td>
							<td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.4719590451045!2d134.9118326152334!3d34.74370218042343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355529e3714034d7%3A0xdcb5bc5ccaf78c2a!2sTHE%20GARDEN%20cafe%26sweets!5e0!3m2!1sja!2sjp!4v1620018173061!5m2!1sja!2sjp" 
								width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</td>
						</tr>
						<tr>
							<td id="koumoku2"></td>
							<td id="tdimg3">ダラット<br />
								タイ、ベトナム、インドネシア料理が楽しめます。<br />
							<a href ="https://tabelog.com/hyogo/A2804/A280402/28031321/" target = "_blank">&lt;&lt;&lt;&nbsp;食べログはこちら</a>
							</td>
							<td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3277.909429035405!2d134.82410721462122!3d34.757874280419884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3554d8441617ec4b%3A0x5ef0c215c0075c31!2z44Ki44K444Ki44Oz44OA44Kk44OL44Oz44KwIOODgOODqeODg-ODiCBEYSBMYXQ!5e0!3m2!1sja!2sjp!4v1620021279930!5m2!1sja!2sjp"
								width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</td>
						</tr>
						<tr>
							<td id="koumoku2"></td>
							<td id="tdimg4">パティスリー&amp;カフェ&nbsp;ピケ<br />
								かわいいハリネズミのケーキが楽しめます。<br />
							<a href ="https://tabelog.com/hyogo/A2804/A280402/28047324/" target = "_blank">&lt;&lt;&lt;&nbsp;食べログはこちら</a>
							</td>
							<td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.4919565430714!2d134.82072251523337!3d34.74319828042357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3554d9b2045879f9%3A0x615a26cf542c32a2!2z44OR44OG44Kj44K544Oq44O8JuOCq-ODleOCpyDjg5TjgrE!5e0!3m2!1sja!2sjp!4v1620369469560!5m2!1sja!2sjp" 
								width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</td>
						</tr>
					<?php }

					elseif($_REQUEST['menu']=="選択肢4"){ ?>

						<tr>
							<td id="koumoku3" lowspan="3">施設</td>
							<td id="tdimg5">ウェルネスパーク<br />
								加古川市で一番大きな図書館です。自然豊かな施設内にはスポーツジムもあります。<br />
							<a href ="https://www.kakogawawellness.jp/" target = "_blank">&lt;&lt;&lt;&nbsp;公式サイトはこちら</a>
							</td>
							<td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3276.3519625896474!2d134.83576494997908!3d34.797085985463056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355527c3ebc77ef1%3A0xb8d342dda537a161!2z5Yqg5Y-k5bed44Km44Kn44Or44ON44K544OR44O844Kv!5e0!3m2!1sja!2sjp!4v1620025384552!5m2!1sja!2sjp"
								width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</td>
						</tr>
						<tr>
							<td id="koumoku3"></td>
							<td id="tdimg6">ニッケパークタウン<br />
								加古川駅からのアクセスも良く、食料品、衣類、家電までなんでもそろいます。<br />
							<a href ="https://nikke-parktown.com/" target = "_blank">&lt;&lt;&lt;&nbsp;公式サイトはこちら</a>
							</td>
							<td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3277.4571030001!2d134.8354633070524!3d34.7692662934697!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3554d80dc8b79c33%3A0xff9fe0b6da448972!2z44OL44OD44Kx44OR44O844Kv44K_44Km44Oz!5e0!3m2!1sja!2sjp!4v1620025745906!5m2!1sja!2sjp"
								width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</td>
						</tr>
						<tr>
							<td id="koumoku3"></td>
							<td id="tdimg7">鶴林寺<br />
								国宝。聖徳太子開基伝承をもつ寺院の1つ。<br />
							<a href ="https://www.kakurinji.or.jp/" target = "_blank">&lt;&lt;&lt;&nbsp;公式サイトはこちら</a>
							</td>
							<td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.102191810634!2d134.83033931523363!3d34.7530184804212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3554d83810fdcc13%3A0xab6a1e065dcfa825!2z6ba05p6X5a-6!5e0!3m2!1sja!2sjp!4v1620373786718!5m2!1sja!2sjp" 
								width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							</td>
						</tr>
					
				<?php }
			}?>



			
			
		</table>

    </main>
	<footer>
		<p>© All rights reserved by Toyoshima.</p>
	</footer>
</body>
</html>