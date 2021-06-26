<?php

class CrastaDB {
    private $PDO;
    private $table = "master";

    /**
     * コンストラクタ
     */
    public function __construct($dsn,$user,$password){

        try{
            $this->PDO = new PDO($dsn, $user, $password);
            echo "PDO:DB成功";
        }catch(PDOException $e){
            echo "接続失敗".$e->getMessage()."\n";
            exit();
        }
    }
    
    /**
     * DBに登録
     */
    public function insertDB($contact_type, $company, $name, $email, $tel, $contact_msg) {
        $stmt = $this->PDO->prepare("insert into ".$this->table." (contact_type,company,name,email,tel,contact_msg) values (?,?,?,?,?,?)");   
        $stmt->bindValue(1, $contact_type);
        $stmt->bindValue(2, $company);
        $stmt->bindValue(3, $name);
        $stmt->bindValue(4, $email);
        $stmt->bindValue(5, $tel);
        $stmt->bindValue(6, $contact_msg);
        $stmt->execute();
    }

    /**
     * 全レコード取得し、jsonファイル作成
     */
    public function makejson(){
        $sql = ("select * from master");

        $dataArry = array();
        $makeJson = null;
        foreach($this->PDO->query($sql) as $row){

            $dataArry[] = array(
                "id" => $row["id"],
                "contact_type" => $row["contact_type"],
                "company" => $row["company"],
                "name" => $row["name"],
                "email" => $row["email"],
                "tel" => $row["tel"],
                "contact_msg" => $row["contact_msg"]
            );

            $makeJson = json_encode($dataArry,JSON_UNESCAPED_UNICODE);
            // echo $makeJson;
        }
        file_put_contents("../../response.json", $makeJson);
    }

    /**
     * レコード削除
     */

     public function deleteRecord($id){
        $sql = "delete from master where id = ".$id;

        $this->PDO->query($sql);
     }

     /**
      * レコード更新
      */

      public function editRecord($REQUEST){
        $stmt = $this->PDO->prepare("update {$this->table} set contact_type = ?, company = ?, name = ?, email = ?, tel = ?, contact_msg = ? where id = ?");
        $stmt->bindValue(1, $REQUEST['contact-radio']);
        $stmt->bindValue(2, $REQUEST['company']);
        $stmt->bindValue(3, $REQUEST['name']);
        $stmt->bindValue(4, $REQUEST['email']);
        $stmt->bindValue(5, $REQUEST['tel']);
        $stmt->bindValue(6, $REQUEST['contact-msg']);
        $stmt->bindValue(7,$REQUEST['recordID']);
        $stmt->execute();
      }
}