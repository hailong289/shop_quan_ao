<?php
require_once "../system/models_system.php";

class models_home extends model_system
{
    function get_three_Categories()
    {
        $sql = "SELECT * FROM danhmuc WHERE an_hien = 1 ORDER BY ID_DM ASC LIMIT 3";
        return $this->query($sql);
    }
   
    function get_all_Categories()
    {
        $sql = "SELECT * FROM danhmuc WHERE an_hien = 1 ORDER BY ID_DM DESC";
        return $this->query($sql);
    }
    function List_cate_WOMEN()
    {
        $sql = "SELECT * FROM sanpham WHERE an_hien = 1 ORDER BY ID_SP DESC";
        return $this->query($sql);
    }
    function List_cate_Man()
    {
        $sql = "SELECT * FROM sanpham WHERE an_hien = 1 ORDER BY soluotmua DESC";
        return $this->query($sql);
    }
    function getID_DM($slug)
    {
        $sql = "SELECT * FROM danhmuc WHERE slug ='$slug'";
        $row = $this->queryOne($sql);
        return $row['ID_DM'];
    }
    function Get_Name_DM($id_dm)
    {
        $sql = "SELECT * FROM danhmuc WHERE ID_DM=" . $id_dm;
        $row = $this->queryOne($sql);
        return $row['name'];
    }
    function ListCate_SP($id_dm, $page_num, $page_size)
    {
        $start = ($page_num - 1) * $page_size;
        $sql = "SELECT * FROM sanpham WHERE an_hien = 1 AND ID_DM = $id_dm ORDER BY ID_SP DESC LIMIT $start,$page_size";
        return $this->query($sql);
    }
    function List_sp($page_num, $page_size)
    {
        $start = ($page_num - 1) * $page_size;
        $sql = "SELECT * FROM sanpham WHERE an_hien = 1 ORDER BY ID_SP DESC LIMIT $start,$page_size";
        return $this->query($sql);
    }
    function ListKey_SP($key, $page_num, $page_size)
    {
        $start = ($page_num - 1) * $page_size;
        $sql = "SELECT * FROM sanpham WHERE an_hien = 1 AND name LIKE '%$key%' ORDER BY ID_SP DESC LIMIT $start,$page_size";
        return $this->query($sql);
    }
    function CountsCate_SP($id_dm)
    {
        $sql = "SELECT count(*) as sl FROM sanpham WHERE ID_DM = $id_dm";
        $row = $this->queryOne($sql);
        return $row['sl'];
    }
    function CountsKey_SP($key)
    {
        $sql = "SELECT count(*) as sl FROM sanpham WHERE name LIKE '%$key%'";
        $row = $this->queryOne($sql);
        return $row['sl'];
    }
    function Counts_SP()
    {
        $sql = "SELECT count(*) as sl FROM sanpham";
        $row = $this->queryOne($sql);
        return $row['sl'];
    }
    function Counts_Email($email)
    {
        $sql = "SELECT count(*) as sl FROM customer WHERE email='$email'";
        $row = $this->queryOne($sql);
        return $row['sl'];
    }
    function COunts_BL($id_sp)
    {
        $sql = "SELECT count(*) as sl FROM binh_luan WHERE ID_SP=" . $id_sp;
        $row = $this->queryOne($sql);
        return $row['sl'];
    }
    function base_links($total_sp, $page_num, $page_size, $base)
    {
        $total_pages = ceil($total_sp / $page_size);
        if ($total_sp <= 0) return "Không có sản phẩm";
        if ($total_pages <= 0) return "Không có sản phẩm";

        $links = '<ul class="pagination justify-content-center mt-5">';
        // Trang đầu trang trước
        if ($page_num >= 2) {
            $pr = $page_num - 1;
            // $links .= "<li class='page-item'><a href='{$baseurl}' class='page-link'><</a></li>";
            $links .= "<li class='page-item'><a href='{$base}page={$pr}' class='page-link'>Trở lại</a></li>";
        }
        // -	Tạo item trang hiện hành : Code tiếp theo code tạo Trang đầu, Trang trước 
        for ($i = 1; $i <= $total_pages; $i++) {
            if ($page_num == $i) {
                $links .= "<li class='page-item active mr-0'><a href='{$base}page={$i}' class='page-link'>{$i}</a></li>";
            } else {
                $links .= "<li class='page-item'><a href='{$base}page={$i}' class='page-link'>{$i}</a></li>";
            }
        }
        //-	Tạo link Trang kế, Trang cuối (khi user không phải ở trang cuối) Code tiếp sau item trang hiện hành:
        //Trang kế , Trang cuối
        if ($page_num < $total_pages) {
            $pn = $page_num + 1;
            $links .= "<li class='page-item'><a href='{$base}page={$pn}' class='page-link'>Tiếp</a></li>";
        }
        // $links .= "<li class='page-item'><a href='{$baseurl}&page_num={$total_pages}' class= 'page-link'>></a></li>";
        $links .= '</ul>';
        return $links;

        // return $total_row;
    }
    function GetSP($slug)
    {
        $sql = "SELECT * FROM sanpham WHERE slug='$slug'";
        return $this->queryOne($sql);
    }
    function GetSP_detail($id){
        $sql = "SELECT * FROM sanpham WHERE ID_SP=".$id;
        return $this->queryOne($sql);
    }
    function ListSP_Lienquan()
    {
        $sql = "SELECT * FROM sanpham ORDER BY ID_SP DESC LIMIT 4";
        return $this->query($sql);
    }
    function update_TTDH($trangthai, $id){
        $sql = "UPDATE donhang SET trang_thai='$trangthai' WHERE ID_DH=".$id;
        $this->execute($sql);
    }
    function Delete_TTDH($an_hien, $id){
        $sql = "UPDATE donhang SET an_hien='$an_hien' WHERE ID_DH=".$id;
        $this->execute($sql);
    }
    function luudonhang($hoten, $diachi, $email, $phone, $ghichu, $id_dh, $id_user)
    {
        if ($id_dh == -1) {
            if ($id_user == null) {
                $sql = "INSERT INTO donhang SET ho_ten='{$hoten}', email='{$email}',sdt='{$phone}',diachi='$diachi',ghichu='{$ghichu}',"
                    . "ngay_dat=Now(), an_hien=1";
                $kq = $this->execute($sql);
                if (!$kq) return false;
                else return $this->conn->lastInsertId();
            } else {
                $sql = "INSERT INTO donhang SET ho_ten='{$hoten}', email='{$email}',sdt='{$phone}',diachi='$diachi',ghichu='{$ghichu}',ID_User='{$id_user}',"
                    . "ngay_dat=Now(), an_hien=1";
                $kq = $this->execute($sql);
                if (!$kq) return false;
                else return $this->conn->lastInsertId();
            }
        } else {
            if ($id_user == null) {
                $sql = "UPDATE donhang SET ho_ten='{$hoten}', email='{$email}',sdt='{$phone}',diachi='$diachi',ghichu='{$ghichu}',"
                    . "ngay_dat=Now(), an_hien=1 WHERE ID_DH=" . $id_dh;
                $kq = $this->execute($sql);
                if (!$kq) return false;
                else return $id_dh;
            } else {
                $sql = "UPDATE donhang SET ho_ten='{$hoten}', email='{$email}',sdt='{$phone}',diachi='$diachi',ghichu='{$ghichu}',ID_User='{$id_user}',"
                    . "ngay_dat=Now(), an_hien=1 WHERE ID_DH=" . $id_dh;
                $kq = $this->execute($sql);
                if (!$kq) return false;
                else return $id_dh;
            }
        }
    }
    function luugiohangchitiet($id_new, $giohang)
    {
        $sql = "DELETE FROM donhangchitiet WHERE ID_DH='$id_new'";
        $this->execute($sql);
        foreach ($giohang as $idsp => $sp) {
            $tenSP = $sp['TenSP'];
            $gia = $sp['Gia'];
            $Amount = $sp['sl'];
            $img = $sp['img'];
            $sql = "INSERT INTO donhangchitiet SET ID_DH='$id_new', ID_SP= '$idsp',ten_sp='{$tenSP}', gia='{$gia}', soluong='$Amount', img='$img'";
            // $kq = $this->query($sql);
            $this->execute($sql);
        } //foreach
    }
    function UpdateLMvaTK($giohang)
    {
        foreach ($giohang as $idSP => $SP) {
            $sql = "UPDATE sanpham SET soluotmua = soluotmua + 1, soluongtonkho = soluongtonkho - 1 WHERE ID_SP='{$idSP}'";
            // $kq = $this->query($sql);
            $this->execute($sql);
        } //foreach
    }
    function getPayment($order_id, $taikhoan, $money, $note, $vnp_response_code, $code_bank, $code_vnpay, $date_time, $row)
    {
        if ($row == -1) {
            $sql = "INSERT INTO payments(order_id, thanh_vien, money, note, vnp_response_code, code_vnpay, code_bank, time) VALUES ('$order_id', '$taikhoan', '$money', '$note', '$vnp_response_code', '$code_vnpay', '$code_bank','$date_time')";
            $this->execute($sql);
            $row = $this->conn->lastInsertId();
            return $row;
        } else {
            $sql = "UPDATE payments SET order_id = '$order_id', money = '$money', note = '$note', vnp_response_code = '$vnp_response_code', code_vnpay = '$code_vnpay', code_bank = '$code_bank' WHERE order_id = '$order_id'";
            $this->execute($sql);
        }
    }
    function CheckLogin($ten_dn)
    {
        $sql = "SELECT * FROM customer WHERE ten_tk='$ten_dn' AND vai_tro=0 AND status=1";
        return $this->queryOne($sql);
    }
    function InsertUser($hoten, $email, $ten_tk, $mk_new)
    {
        $sql = "INSERT INTO customer (ho_ten,email,ten_tk, pass, an_hien) VALUES ('$hoten','$email','$ten_tk','$mk_new','1')";
        $this->execute($sql);
        return $this->conn->lastInsertId();
    }
    function checkTen_dn($ten_tk)
    {
        $sql = "SELECT * FROM customer WHERE ten_tk='$ten_tk'";
        return $this->queryOne($sql);
    }
    function GetUser_ByID($id)
    {
        $sql = "SELECT * FROM customer WHERE ID_User='$id'";
        return $this->queryOne($sql);
    }
    function checkEMail($email)
    {
        $sql = "SELECT * FROM customer WHERE email='$email'";
        return $this->queryOne($sql);
    }
    function ActiveUser($id_User)
    {
        $sql = "UPDATE customer SET status = 1 WHERE ID_User=" . $id_User;
        $this->execute($sql);
    }
    // Dổi mật khẩu bị quên
    function DoiPassQuen_User($id, $mk_new)
    {
        $sql = "UPDATE customer SET pass = '$mk_new' WHERE ID_User=" . $id;
        $this->execute($sql);
    }
    function Update_Luotxem($id)
    {
        $sql = "UPDATE sanpham SET soluotxem = soluotxem + 1 WHERE ID_SP=" . $id;
        $this->execute($sql);
    }
    // function Update_LuotMua($giohang){
    //     foreach($giohang as $key=>$value){
    //         $sql = "UPDATE sanpham SET soluotmua = soluotmua + 1 WHERE ID_SP=" . $key;
    //         $this->execute($sql);
    //     }
    // }
    function Update_User($hoten, $email, $sdt, $hinh, $id_user)
    {
        if ($hinh != null) {
            $sql = "UPDATE customer SET ho_ten = '$hoten', email='$email', sdt='$sdt', hinh='$hinh' WHERE ID_User=" . $id_user;
            $this->execute($sql);
        } else {
            $sql = "UPDATE customer SET ho_ten = '$hoten', email='$email', sdt='$sdt' WHERE ID_User=" . $id_user;
            $this->execute($sql);
        }
    }
    function ALLdonhang($id)
    {
        $sql = "SELECT * FROM donhang WHERE ID_User= '$id' AND an_hien = 1" ;
        return $this->query($sql);
    }
    function ALLdonhangchitiet($id_dh)
    {
        $sql = "SELECT * FROM donhangchitiet WHERE ID_DH=" . $id_dh;
        return $this->query($sql);
    }
    // Số lượng người dùng truy cập
    // bình luận
    function InsertComment($noidung, $id, $id_sp)
    {
        $sql = "INSERT INTO binh_luan (noidung, date, ID_User, ID_SP) VALUES ('$noidung',NOW(),'$id','$id_sp')";
        $this->execute($sql);
    }
    function getALl_BL($id_sp)
    {
        $sql = "SELECT * FROM binh_luan WHERE ID_SP='$id_sp' ORDER BY ID_BL DESC";
        return $this->query($sql);
    }

    function GetName_BL($id)
    {
        $sql = "SELECT * FROM customer WHERE ID_User=" . $id;
        $kq = $this->queryOne($sql);
        return $kq['ho_ten'];
    }
}
