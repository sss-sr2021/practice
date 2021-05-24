<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Calender</title>
        <script src="/jquery-3.6.0.js"></script>
    </head>
    <body>
<!-- Q-1 -->
<p><?= date('Y-m-d H:i:s l') ?></p>
<!-- Q-2 -->
<?php
$weeks = ['日','月','火','水','木','金','土'];  // 曜日名
$now = getdate();   // 本日を配列にする
$after20day = mktime(0,0,0,$now['mon'],$now['mday']+20,$now['year']);   //　20日後のタイムスタンプ
?>
<?= date('Y年m月d日（',$after20day) . $weeks[date('w',$after20day)] . ')' ?>
<!-- Q-3 -->
<?php
$lastPreMday = mktime(0,0,0,$now['mon'],0,$now['year']);    // 前月の最終日
$datePrev = getdate($lastPreMday);                          // 前月の最終日を配列にする
$firstDate = mktime(0,0,0,$now['mon'],1,$now['year']);      // 今月の１日
$date1st = getdate($firstDate);                             // １日目を配列にする
$lastDate = mktime(0,0,0,$now['mon']+1,0,$now['year']);     // 末日
$dateLast = getdate($lastDate);                             //　末日を配列にする
?>
<!-- カレンダー開始　-->
<h3><?= $now['year'] ?>年<?= $now['mon'] ?>月</h3>
<ul id="calender">
<?php
// 曜日ラベル
foreach($weeks as $w => $week):
?>
    <li class="week-<?= $w ?> weekLabel"><?= $week ?></li>
<?php
endforeach;
// 前月
for($i=$datePrev['wday'];$i>=0;$i--) :
    $preDate = $lastPreMday - (60*60*24*$i);    // 前月末のタイプスタンプ
    $w = date('w',$preDate);                    // 曜日番号を取得
?>
    <li class="week-<?= $w ?> prevMonth"><?= date('j',$preDate) ?><span class="wday">（<?= $weeks[$w] ?>）</span></li>
<?php
endfor;
// 今月
for($i=1;$i<=$dateLast['mday'];$i++) :
    $curDate = $firstDate + (60*60*24*($i-1));  // 当該日付のタイムスタンプ
    $w = date('w',$curDate);                    // 当該日助の曜日番号
    $today = date('j') == $i ? 'today' : '';    //  本日？
?>
    <li class="week-<?= $w . ' ' . $today ?>"><?= $i ?><span class="wday">（<?= $weeks[$w] ?>）</span></li>
<?php
endfor;
// 次月
for($i=$dateLast['wday'];$i<6;$i++) :
    $nxtDate = $lastDate + (60*60*24*$i);       // 次月はじめのタイムスタンプ 
    $w = date('w',$nxtDate);                    // 曜日番号の取得
?>
    <li class="week-<?= $w ?> nextMonth"><?= date('j',$nxtDate) ?><span class="wday">（<?= $weeks[$w] ?>）</span></span></li>
<?php
endfor;
// PHP終了
?>
</ul>
<!-- カレンダー終了　-->
    </body>
    <style type="text/css">
/* タイトル */
h3 {
    text-align: center;
}
/* カレンダー */
#calender {
    width: 80vw;
    margin: 1em auto;
    padding: 0 0;
    list-style-type: none;
}
#calender li {
    border: 1px solid #000;
}
#calender .week-0 {
    color: red;
}
#calender .week-6 {
    color: blue;
}
#calender .today {
    color: white;
    background-color: green;
    font-weight: bold;
}
.weekLabel {
    background-color: lightblue;
}
.prevMonth,
.nextMonth {
    background-color: silver;
}
@media screen and (max-width:768px) {
    .weekLabel { display: none; }
    .prevMonth { display: none; }
    .nextMonth { display: none; }
}
@media screen and (min-width:769px) {
    #calender {
        display: flex;
        flex-wrap: wrap;
    }
    #calender li {
        flex-basis: calc(80vw / 8);
        text-align: center;
    }
    .wday { display: none; }
}
    </style>
</html>