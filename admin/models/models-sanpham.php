<?php 
require_once "../system/models_system.php";

class models_sanpham extends model_system{
    function GetALLDM(){
        $sql = "SELECT * FROM danhmuc";
        return $this->query($sql);
    }
   
    function InsertSP($dm, $ten_sp, $hinh, $gia, $giakm, $hot, $an_hien, $mota, $sltk){
        $sql = "INSERT INTO sanpham (name, gia, img, ID_DM, an_hien, giakhuyenmai, mota, hot, soluongtonkho) VALUES ('$ten_sp','$gia','$hinh','$dm','$an_hien','$giakm','$mota','$hot','$sltk')";
        $this->execute($sql);
    }
    function getDM_byID($id_dm){
       $sql = "SELECT * FROM danhmuc WHERE ID_DM=".$id_dm;
       $row = $this->queryOne($sql);
       return $row['name'];
    }
  
    function getAll_SP($page_num, $page_size){
        $start = ($page_num - 1) * $page_size;
        $sql = "SELECT * FROM sanpham ORDER BY ID_SP DESC LIMIT $start,$page_size";
        return $this->query($sql);
    }
    function getSP_byID($id){
        $sql = "SELECT * FROM sanpham WHERE ID_SP=".$id;
        return $this->queryOne($sql);
    }
    function Update_SP($dm,$ten_sp, $hinh, $gia, $giakm, $hot, $an_hien, $mota, $sltk, $id_sp){
        if($hinh == null){
            $sql = "UPDATE sanpham SET name='$ten_sp',gia='$gia',ID_DM='$dm',an_hien='$an_hien',giakhuyenmai='$giakm',mota='$mota',hot='$hot',soluongtonkho='$sltk' WHERE ID_SP=".$id_sp;
            $this->execute($sql);
        }else{
            $sql = "UPDATE sanpham SET name='$ten_sp',gia='$gia',img='$hinh',ID_DM='$dm',,an_hien='$an_hien',giakhuyenmai='$giakm',mota='$mota',hot='$hot',soluongtonkho='$sltk' WHERE ID_SP=".$id_sp;
            $this->execute($sql);
        }
    }
    function Delete_SP($id_sp){
        $sql = "DELETE FROM sanpham WHERE ID_SP=".$id_sp;
        $this->execute($sql);
    }
    function Counts_SP(){
        $sql = "SELECT count(*) as sl FROM sanpham";
        $row = $this->queryOne($sql);
        return $row['sl'];
    }
    function base_links($total_sp, $page_num, $page_size, $base){
        $total_pages = ceil($total_sp / $page_size);
        if($total_sp <= 0) return "Không có sản phẩm";
        if($total_pages <= 0) return "Không có sản phẩm";

        $links = '<ul class="pagination justify-content-end mt-5">';
        // Trang đầu trang trước
        if ($page_num >= 2) {
            $pr = $page_num - 1;
            // $links .= "<li class='page-item'><a href='{$baseurl}' class='page-link'><</a></li>";
            $links .= "<li class='page-item'><a href='{$base}&page={$pr}' class='page-link'>Trở lại</a></li>";
        }
        // -	Tạo item trang hiện hành : Code tiếp theo code tạo Trang đầu, Trang trước 
        for ($i = 1; $i <= $total_pages; $i++) {
            if ($page_num == $i) {
                $links .= "<li class='page-item active mr-0'><a href='{$base}&page={$i}' class='page-link'>{$i}</a></li>";
            } else {
                $links .= "<li class='page-item'><a href='{$base}&page={$i}' class='page-link'>{$i}</a></li>";
            }
        }
        //-	Tạo link Trang kế, Trang cuối (khi user không phải ở trang cuối) Code tiếp sau item trang hiện hành:
        //Trang kế , Trang cuối
        if ($page_num < $total_pages) {
            $pn = $page_num + 1;
            $links .= "<li class='page-item'><a href='{$base}&page={$pn}' class='page-link'>Tiếp</a></li>";
        }
        // $links .= "<li class='page-item'><a href='{$baseurl}&page_num={$total_pages}' class= 'page-link'>></a></li>";
        $links .= '</ul>';
        return $links;
    
        // return $total_row;
    }
}
?>