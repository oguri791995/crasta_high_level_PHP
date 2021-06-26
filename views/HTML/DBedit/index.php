<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/DBedit.css">
    <title>DB</title>
</head>
    <body>
    <?php 
        require "../../../CrastaDB.php";

        $db = new CrastaDB("mysql:dbname=crastadb;host=localhost","root","0907");
        // echo $db->showDB("select * from master");
        $db->makejson();
    
    ?>
        <div class="background displayNone"></div>
        <div class="popup displayNone">
            <form action="../../../recordEdit.php" method="POST" class="edit-form">
                <div class="recordID">ID:
                    <input type="text" name="recordID" readonly>
                </div>
                <div class="contact-type">
                    <div class="contact-type-title required">お問い合わせ種別</div>
                    <label for="production-request" class="radio" ><input type="radio" value="production-request" name="contact-radio" id="production-request" checked>制作依頼</label><br class="displayNone-pc">
                    <label for="recruitment" class="radio"><input type="radio" value="recruitment" name="contact-radio" id="recruitment">採用</label><br class="displayNone-pc">
                    <label for="IR" class="radio"><input type="radio" value="IR" name="contact-radio" id="IR">IR</label><br class="displayNone-pc">
                    <label for="another" class="radio"><input type="radio" value="another" name="contact-radio" id="another">その他</label><br class="displayNone-pc">
                </div>
                <div class="company-name contact-item">
                    <label for="" >会社名・団体名</label><br>
                    <input type="text" name="company" id="aaa" placeholder="株式会社crasta">
                </div>
                <div class="name contact-item">
                    <label for="" class="required" >お名前</label><br>
                    <input type="text" name="name" placeholder="佐藤 太郎" required>
                </div>
                <div class="e-mail contact-item">
                    <label for="" class="required">メールアドレス</label><br>
                    <input type="text" name="email" placeholder="test@test.com" required pattern="[\w\-\.]*@[\w\-\.]*\.[\w\-\.]*">
                </div>
                <div class="tel contact-item">
                    <label for="">電話番号</label><br>
                    <input type="text" name="tel" pattern="0[0-9]{1,4}[0-9]{1,4}[0-9]{4}" placeholder="「-」は含めないで入力。　例) 09012341234">
                </div>
                <div class="contact-contents contact-item">
                    <label for="" class="required">お問い合わせ内容</label><br>
                    <textarea name="contact-msg" id="" cols="30" rows="10" maxlength="300" placeholder="300文字以内で入力してください" required></textarea>
                </div>
                <div class="edit">
                    <input type="submit" value="変更">
                </div>
                <div class="x-button">
                    <ul class="button-ul">
                        <li class="button-line line-1"></li>
                        <li class="button-line line-2"></li>
                    </ul>
                </div>
            </form>

        </div>
        <table border="1" id="db-edit-table">
        <tr id="list-title">
            <th>ID</th>
            <th id="id-test" onclick="getID(this.id)">お問い合わせ種別</th>
            <th>会社名</th>
            <th>名前</th>
            <th>メールアドレス</th>
            <th>電話番号</th>
            <th>お問い合わせ内容</th>
            <th>削除</th>
            <th>編集</th>
        </tr>
    </table>
</body>
<script src="../../JS/DBedit.js"></script>
</html>
