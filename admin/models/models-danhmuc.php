<?php 
require_once "../system/models_system.php";

class models_danhmuc extends model_system{
    function getALlDMBYDESC(){
        $sql = "SELECT * FROM danhmuc ORDER BY ID_DM DESC";
        return $this->query($sql);
    }
    function add_DM($ten_dm, $an_hien){
        $sql = "INSERT INTO danhmuc (name, an_hien) VALUES ('$ten_dm','$an_hien')";
        return $this->execute($sql);
    }
    function getDMdetail($id_dm){
        $sql = "SELECT * FROM danhmuc WHERE ID_DM=".$id_dm;
        return $this->queryOne($sql);
    }
    function UpdateDm($ten_dm, $an_hien, $id_dm){
        $sql = "UPDATE danhmuc SET name='$ten_dm', an_hien='$an_hien' WHERE ID_DM=".$id_dm;
        $this->execute($sql);
    }
    function Delete_DM($id_dm){
        $sql = "DELETE FROM danhmuc WHERE ID_DM=".$id_dm;
        $this->execute($sql);
    }
}

?>