<?php
    define( 'DB_DRIVER' , 'pgsql');
    define( 'DB_HOST' , 'localhost');
    define( 'DB_PORT' , '5432');
    define( 'DB_NAME' , 'testdb');
    define( 'DB_USER' , 'postgres');
    define( 'DB_PASS' , '');
    global $dbh;
    function dbInit(){
    $dbh = new PDO(
        DB_DRIVER . ':host=' . DB_HOST . ' port=' . DB_PORT  . ' dbname=' . DB_NAME ,
        DB_USER,
        DB_PASS,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
        return $dbh ;  // returnしないとその値使えない
    }
    function logOut(){
        $_SESSION["logined"] = null;
    }
    function getloginUser($where = []){
        global $dbh ;
        if(!empty($_SESSION["logined"])){  //$_SESSION["logined"]の値があったら（空だったらの反対）
            return $_SESSION["logined"] ;  //loginしてたらこれを返す（いちいち検索しない）
        }
        foreach($where as $key => $value){
            $sth = $dbh-> prepare(
                "SELECT * FROM users WHERE  {$key}=:{$key}"
            );
        }
        $exc = $sth ->execute(
            $where
        );
        $rows = $sth -> fetchAll();

        $User_id = $rows[0]['id'];
        print_r($User_id);
        $sth = $dbh-> prepare(
            "SELECT * FROM user_meta WHERE  user_id=:user_id"
        );
        $exc = $sth ->execute(
            ["user_id" => $User_id]
        );
        $rows2 = $sth -> fetchALL();
        print_r($rows2);
        $_SESSION["logined"] = @$rows[0];
        return $_SESSION["logined"] ;     //関数の中のreturnは条件を書かないと前のreturnしか反映されない（今回はif文で条件をつけている）
    }