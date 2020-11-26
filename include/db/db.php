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
    public function get_personal_list()
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
        if(count($res) != 1){
            return null;
        }else{
            return $res[0];
        }
    }

    //登録ユーザー仕事関連情報を取得
    public function get_job()
    {
        $res = [];
        $sql = "SELECT * FROM job";
        if ($result = $this->mysqli->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                $res[] = $row;
            }
            $result->close();
        }
        if(count($res) != 1){
            return null;
        }else{
            return $res[0];
        }
    }

    public function get_job_by_id($id)
    {
        $res = [];
        $sql = "SELECT * FROM job WHERE job_ID = $id";
        if ($result = $this->mysqli->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                $res[] = $row;
            }
            $result->close();
        }
        if(count($res) != 1){
            return null;
        }else{
            return $res[0];
        }
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

    
}
