<?php
/***
 *
 * functions.php : 共通関数群
 *
 * Author : 近藤雅昭
 * Version : 0.0.1
 * Created : 2021.05.18
 * Updated : 2021.05.18
 * 
 */

/*
 * 定数
 */
define('DB_NAME','testdb'); // データベース名

/**
 * 関数：DBの開始 
 */
function db_start(){

}

/*
 * 関数 : ログインユーザー情報の取得
 * 
 * 　$where array : 検索条件の配列
 * 　return array : ログインユーザー情報/null 
 */
function getLoginUser( $where=[] ){
    foreach( (array) $where as $key => $value ){
        // SQL文
        $sql = "SELECT * FROM users WHERE {$key} = :{$key}";
        $rows = db_exec($sql,[$key=>$value]);　// DBから結果を取得
    }
    $_SESSION['logined'] = $rows[0]; // セッション変数に保持
    return #rows; //　ログインユーザー情報を戻す
}

/*
 * 関数 : DBから結果を取得
 * 
 * 　$sql string : SQL文
 * 　$where array : 検索条件の配列
 * 　return array : ログインユーザー情報/null 
 */
function db_exec(  $sql, $where=[]){
    global $dbh;    //DBハンドル
    $sth = $dbh->prepare($sql); //  SQL定義
    $sth->execute($where);  //SQL実行
    $rows = $sth->fetchAll();   //結果取得
    return $rows;
}