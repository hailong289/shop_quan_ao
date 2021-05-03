<?php 
require_once "../system/models_system.php";

class models_user extends model_system{
    function Insert_Customer($hoten, $ten_dn, $mk_hash, $sdt, $email, $vaitro){
        $sql = "INSERT INTO customer (ho_ten, ten_tk, email, sdt, pass, vai_tro,an_hien) VALUES ('$hoten','$ten_dn','$email','$sdt','$mk_hash','$vaitro','1')";
        $this->execute($sql);
    }
    function Insert_Customer_new($hoten, $tentk, $mk_hash, $sdt, $email, $vai_tro,$img, $an_hien){
        if($img == null){
            $sql = "INSERT INTO customer (ho_ten, ten_tk, email, sdt, pass, vai_tro,an_hien) VALUES ('$hoten','$tentk','$email','$sdt','$mk_hash','$vai_tro','$an_hien')";
            $this->execute($sql);
        }else{
            $sql = "INSERT INTO customer (ho_ten, ten_tk, email,hinh, sdt, pass, vai_tro,an_hien) VALUES ('$hoten','$tentk','$email','$img','$sdt','$mk_hash','$vai_tro','$an_hien')";
            $this->execute($sql);
        }
    }
    function Check_USER($ten_dn, $mk){
        $sql = "SELECT * FROM customer WHERE ten_tk='$ten_dn' AND pass='$mk'";
        return $this->queryOne($sql);
    }
    function List_User(){
        $sql = "SELECT * FROM customer";
        return $this->query($sql);
    }
}
?>