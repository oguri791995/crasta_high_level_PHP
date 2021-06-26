<?php
    require "CrastaDB.php";

    $db = new CrastaDB("mysql:dbname=crastadb;host=localhost","root","0907");

    /**
     * リクエストの例:sql_del_13
     * 13を抽出してメソッドにわたす。
     */
    $db->deleteRecord(explode("_",$_POST["del_id"])[2]);
