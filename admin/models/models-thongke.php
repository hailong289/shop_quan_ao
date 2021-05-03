<?php
require_once "../system/models_system.php";

class thongke extends model_system
{
    function ThongkeDH()
    {
        $sql = "SELECT count(*) as sl FROM donhang";
        $row = $this->queryOne($sql);
        return $row['sl'];
    }
    function Thongke_User()
    {
        $sql = "SELECT count(*) as sl FROM customer";
        $row = $this->queryOne($sql);
        return $row['sl'];
    }
    function Thongke_SP()
    {
        $sql = "SELECT count(*) as sl FROM sanpham";
        $row = $this->queryOne($sql);
        return $row['sl'];
    }
    function Thongke_DM()
    {
        $sql = "SELECT count(*) as sl FROM danhmuc";
        $row = $this->queryOne($sql);
        return $row['sl'];
    }
    function Sp_Bc()
    {
        $sql = "SELECT * FROM sanpham ORDER BY soluotmua DESC LIMIT 5";
        return $this->query($sql);
    }
    function DH_NEW()
    {
        $sql = "SELECT * FROM donhang WHERE trang_thai = 0 OR trang_thai = 1 ORDER BY ID_DH DESC LIMIT 10";
        return $this->query($sql);
    }
    // function CountUser_online(){
    //     $sql = "SELECT count(*) as sl FROM user_online";
    //     $row = $this->queryOne($sql);
    //     return $row['sl'];
    // }
    function GetMonthDH()
    {
        $date = date('Y');
        $sql = "SELECT month(ngay_dat) FROM donhang WHERE year(ngay_dat)='$date'";
        return $this->query($sql);
    }
    function GetThang_DH(){
        $sql = "SELECT MONTH(ngay_dat) as thang FROM donhang";
        return $this->query($sql);
    }
    function DoanhThuNam()
    {
        $date = date('Y');
        $sql = "SELECT SUM(dhct.gia) AS 'tong' FROM donhang as dh inner join donhangchitiet as dhct ON dh.ID_DH=dhct.ID_DH WHERE YEAR(dh.ngay_dat) = '$date'";
        $row = $this->queryOne($sql);
        return $row['tong'];
    }
    function DoanhThuNamTruoc()
    {
        $date_now = date('Y');
        $date = strtotime($date_now.' -1 year');
        $date_new = date('Y',$date);
        $sql = "SELECT SUM(dhct.gia) AS 'tong' FROM donhang as dh inner join donhangchitiet as dhct ON dh.ID_DH=dhct.ID_DH WHERE YEAR(dh.ngay_dat) = '$date_new'";
        $row = $this->queryOne($sql);
        return $row['tong'];
    }
}
