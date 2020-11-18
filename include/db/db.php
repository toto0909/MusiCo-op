<?php
//DBに接続し結果を取得、各テーブルの中身をallで返すようにする

class DB{
    
    private $mysqli;
    
    //DB接続
    public function __construct()
    {
        $this->mysqli  = new mysqli("mysql1019.db.sakura.ne.jp","nahoo" ,"kawa_toto", "nahoo_musicoop_db");
    }

    //登録ユーザー一覧を全取得
    public function get_personal()
    {
        $res = [];
        $sql = "SELECT * FROM personal";
        if ($result = $this->mysqli->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                $res[] = $row;
            }
            $result->close();
        }
        return $res;
    }

    //登録ユーザー情報をIDによって取得
    public function get_personal_by_id(int $id)
    {
        $res = [];
        $sql = "SELECT * FROM personal WHERE musicoop_ID = $id";
        if ($result = $this->mysqli->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                $res[] = $row;
            }
            $result->close();
        }
        return $res;
    }

    //登録組織情報一覧を全取得
    public function get_organization()
    {
        $res = [];
        $sql = "SELECT * FROM organization";
        if ($result = $this->mysqli->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                $res[] = $row;
            }
            $result->close();
        }
        return $res;
    }

    //登録楽器情報一覧を全取得
    public function get_instrumental()
    {
        $res = [];
        $sql = "SELECT * FROM instrumental";
        if ($result = $this->mysqli->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                $res[] = $row;
            }
            $result->close();
        }
        return $res;
    }

    //登録住所情報一覧を全取得
    public function get_address()
    {
        $res = [];
        $sql = "SELECT * FROM address_";
        if ($result = $this->mysqli->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                $res[] = $row;
            }
            $result->close();
        }
        return $res;
    }

    //登録SNS情報一覧を全取得
    public function get_SNS()
    {
        $res = [];
        $sql = "SELECT * FROM SNS";
        if ($result = $this->mysqli->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                $res[] = $row;
            }
            $result->close();
        }
        return $res;
    }

    //musicoop_IDを入力してpersonal情報を1行($info)取得する
    public function get_by_musicoop_id($musicoop_ID, $info)
    {
        
        $sql = "SELECT * FROM personal WHERE id = $musicoop_ID";
        
        // クエリを実行する
        $result = $this->mysqli->query($sql);

        // クエリ実行に成功したら
        if ($result) {
            // クエリ実行結果から1行取得する
            $row = $result->fetch_assoc();

            $array = $row[$info];
            //var_dump($array);
            print($array);

            // クエリ実行結果を破棄する
            $result->close();

            // クエリ実行結果から1行取得できていたら、結果を返す
            if ($row) {
                return $row;
            }
        }
    }
}

?>

