<?php 
require_once "config.php";
class model_system{
    public $conn;
    public $time;
    public $time_check;
    public $session;
    function __construct()
    {
        $otp = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $this->conn = new PDO('mysql:host='.HOST_DB.';dbname='.DB_NAME,USER_DB,PASS_DB,$otp);
        // echo "thành công";
        // $this->time = time();
        // $this->session = session_id();
        // $this->time_check = $this->time - 60;
        // $row = $this->DemslUser_online($this->session);
        // if($row == "0"){
        //    $this->InsertUSer_online($this->time, $this->session);
        // }else{
        //     $this->UpdateUser_online($this->session, $this->time);
        // }
        // $this->DeleteUser_online($this->time, $this->time_check);
    }
    function query($sql){
        $result = $this->conn->query($sql);
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    function queryOne($sql){
        $result = $this->conn->query($sql);
        // $result = $conn->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        return $row;
        // return $result;
    }
    function execute($sql){
        $result = $this->conn->exec($sql);
        return $result;
    }
    // function InsertUSer_online($time, $session){
    //     $sql = "INSERT INTO user_online (session,time) VALUES ('$session','$time')";
    //     $this->execute($sql);
    // }
    // // Đếm số người dùng truy cập
    // function DemslUser_online($session){
    //     $sql = "SELECT count(*) as sl FROM user_online WHERE session='$session'";
    //     $row = $this->queryOne($sql);
    //     return $row['sl'];
    // }
    // function UpdateUser_online($session,$time){
    //     $sql = "UPDATE user_online SET time='$time' WHERE session = '$session'";
    //     $this->execute($sql);
    // }
    // function DeleteUser_online($time_check){
    //     $sql="DELETE FROM user_online WHERE time < $time_check";
    //     $this->execute($sql);
    // }
} // End class model

// $model = new model_system;
?>