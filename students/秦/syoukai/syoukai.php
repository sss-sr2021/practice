<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="Shift_JIS"/>
		<title>自己紹介</title>
	</head>
	<body>
        <h1>～自己紹介～</h1>
        <div class="syoukai">
            <p>お名前：秦　伊吹</p>
            <p>性別<input type="radio"name="radio">男性<input type="radio"name="radio">女性<br/></p>
            <p>好きな色
                <form action="syoukai2.php">
                    <input type="color" nama="color">
                    <input type="submit" name="rikuzyou2" value="適用"/>
                </form>
            </p>
            <p>出身地：兵庫県美方郡香美町香住</p>
            <img src="kasumi.jfif"/>
        </div>
        <div class="syoukai2">
            <table border="1">
                <tr>
                    <th colspan="3">私を表す要素</th>
                </tr>
                <tr>
                    <th>要素</th>
                    <th>割合</th>
                    <th>詳細</th>
                </tr>
                <tr>
                    <td>陸上競技</td>
                    <td><meter name="rikuzyou" value="30" min="0" max="100">30％</meter></td>
                    <td>
                        <form action="">
                            <input type="submit" name="rikuzyou2" value="どんな種目をしていたのか？"/>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>読書</td>
                    <td><meter name="dokusyo" value="35" min="0" max="100">35％</meter></td>
                    <td>
                        <form action="">
                            <input type="submit" name="dokusyo2" value="どんな本を読むのか？"/>
                        </form>
                    </td>
                </tr>
                    <td>猫カフェ</td>
                    <td><meter name="nekocafe" value="35" min="0" max="100">35％</meter></td>
                    <td><input type="submit" name="nekocafe2" value="詳細"/></td>
            </table>
        </div>
	</body>
</html>	