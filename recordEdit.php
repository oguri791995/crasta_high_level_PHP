<?php
    require "CrastaDB.php";
    print_r ($_REQUEST);

    $db = new CrastaDB("mysql:dbname=crastadb;host=localhost","root","0907");
    $db->editRecord($_REQUEST);
    header("Location:./views/HTML/DBedit/index.php");

