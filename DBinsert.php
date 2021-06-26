<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    DBinsert
    <?php
        require "CrastaDB.php";

        $db = new CrastaDB("mysql:dbname=crastadb;host=localhost","root","0907");
        $db->insertDB($_POST["contact-radio"],$_POST["company"],$_POST["name"],$_POST["email"],$_POST["tel"],$_POST["contact-msg"]);
        

    ?>
</body>
</html>