<?php 
require_once "../system/models_system.php";

class models_donhang extends model_system{
    function getALL_DH(){
        $sql = "SELECT * FROM donhang ORDER BY ID_DH DESC";
        return $this->query($sql);
    }
    function GETDH_detail($id_dh){
        $sql = "SELECT * FROM donhangchitiet WHERE ID_DH=".$id_dh;
        return $this->query($sql);
    }
    function DH_detail($id){
        $sql = "SELECT * FROM donhang WHERE ID_DH=".$id;
        return $this->queryOne($sql);
    }
    function Update_DH($ngay_giao, $id){
        $sql = "UPDATE donhang SET ngay_giao='$ngay_giao', trang_thai = '1' WHERE ID_DH=".$id;
        $this->execute($sql);
    }
    function Update_TT($trang_thai, $id){
        $sql = "UPDATE donhang SET trang_thai = '{$trang_thai}' WHERE ID_DH=".$id;
        $this->execute($sql);
    }
    
}
?>