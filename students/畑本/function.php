<?php
/*** 
*function.php : 共通関数群
*
*Author : 畑本
*Version : 0.0.1
*Created : 2021.05.12
*Update : 2021.05.17
*
*/

define('DB', 'pgsql');
define('DB_HOST', 'localhost');
define('DB_PORT', 5432 );
define('DB_NAME', 'testdb');
define('DB_USER', 'testuser');
define('DB_PASS', '');
global $dbh;

    /***
    * 関数 : データベースへの接続
    */
    function dbInit(){
        $dbh = new PDO(
            DB . ':host=' . DB_HOST  . ' port=' . DB_PORT . ' dbname=' . DB_NAME,
            DB_USER,
            DB_PASS,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
        return $dbh;
    }

    /***
    * 関数 : ログアウト
    */
    function logOut(){
        unset($_SESSION['logined']);
        // unset($_SESSION['set']);
    }
    
    /***
    * 関数 : ログインユーザー情報の取得(usersテーブル)
    * $where array : 検索条件の配列
    * return array : ログインユーザー情報 or null
    */
    function getLoginUser($where=[]){
        // global $dbh;  //DBハンドル
        if (empty($where)){
            return null;
        }
        if (!isset($_SESSION['logined'])){
            foreach ($where as $key => $val){  // foreach (配列の変数 as キー => 値)
            $sql = "SELECT * FROM users WHERE {$key} = :{$key}";  // usersテーブルの全てを検索
            $rows = do_exec($sql,[$key=>$val]);   // DBから結果を取得
            }
            $_SESSION['logined'] = $rows[0];
            SettingUser($_SESSION['logined']['id']);
            return $_SESSION['logined'];
        }
    }

    /***
    * 関数 : ログインユーザー情報の表示
    * $user_id array : ログインユーザーのID（usersテーブル）
    * return : ログインユーザー情報（user_metaテーブルの情報）
    */
    function SettingUser($user_id){
        global $dbh;
        if (empty($user_id)){
            return null;
        }
        $meta = [];
        if (!isset($_SESSION['set'])){
                $sth = $dbh->prepare(
                    "SELECT * FROM user_meta WHERE user_id = :user_id"   //use_id = user_metaテーブルのuser_id列   :use_id = user_idと置き換える
                );
                $ret = $sth->execute(['user_id' => $user_id]);  //'user_id' = :user_id
                $rows = $sth->fetchALL();
                foreach($rows as $key => $val){
                    $meta_key = $val['meta_key'];
                    $meta_value = $val['meta_value'];
                    $meta[$meta_key] = $meta_value;         //配列$metaのキーを$meta_keyにして$meta_valueを代入
                }
                $_SESSION['set'] = $meta;
        }
            return $_SESSION['set'];
    }
    
    /***
    * 関数 : SQL
    * $sql : SQL文
    * $where array : 条件 
    * return : SQLの結果
    */
    function do_exec($sql,$where=[]){
        global $dbh;   // DBハンドル
        $sth = $dbh->prepare($sql);   // SQL定義
        $sth->execute($where);   // SQL実行
        $rows = $sth->fetchAll();   // 結果取得
        return $rows;
    }

    /***
    * 関数 : SQL文のまとめ
    * $user_id : ユーザーID
    * $meta_k : 出身地のキー
    * $meta_v : 出身地の値
    */
    function metaInsertOrUpdate($user_id,$meta_k,$meta_v){
        global $dbh;
        print_r([$user_id,$meta_k,$meta_v,$_SESSION['set']]);
        if (!empty($_SESSION['set'][$meta_k]) || $_SESSION['set'][$meta_k]===''){
            $sth = $dbh->prepare(
                'UPDATE user_meta SET meta_value = :meta_value WHERE user_id = :user_id AND meta_key = :meta_key'
            );
            $ret = $sth->execute([
                'user_id' => $user_id,
                'meta_key' => $meta_k,
                'meta_value' => $meta_v
            ]);}
            else{
            $sth = $dbh->prepare(
                 'INSERT INTO user_meta(user_id,meta_key,meta_value) VALUES (:user_id,:meta_key,:meta_value)'   // :置き換える
            );
            $ret = $sth->execute([
                'user_id' => $user_id,
                'meta_key' => $meta_k,
                'meta_value' => $meta_v
            ]);
            }
            $_SESSION['set'][$meta_k] = (string)$meta_v;
    }