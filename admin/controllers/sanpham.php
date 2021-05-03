<?php
require_once "models/models-sanpham.php";
class sanpham
{
    function __construct()
    {
        $this->models = new models_sanpham;
        $act = "index";
        if (isset($_GET['act'])) $act = $_GET['act'];
        switch ($act) {
            case 'index':
                $this->index();
                break;
            case 'add-new':
                $this->add();
                break;
            case 'store':
                $this->store();
                break;
            case 'edit':
                $this->edit();
                break;
            case 'update':
                $this->update();
                break;
            case 'delete':
                $this->delete();
                break;
            default:
                # code...
                break;
        }
    }
    function index()
    {
       
        $title = "Danh sách sản phẩm";
        $page_num = 1;
        $page_size = PAGE_SIZE;
        if(isset($_GET['page'])==true) $page_num = $_GET['page'];
        $ds_sp = $this->models->getAll_SP($page_num, $page_size);
        $total_sp = $this->models->Counts_SP();
        // var_dump($total_sp);
        $base = ADMIN_URL . "/?ctrl=sanpham&act=index";
        $links = $this->models->base_links($total_sp, $page_num, $page_size, $base);
        // var_dump($links);
        $views = "views/ds-sp.php";
        require_once "views/layout.php";
    }
    function add()
    {
        $title = "Thêm sản phẩm";
        $dm = $this->models->GetALLDM();
        $views = "views/add-sanpham.php";
        require_once "views/layout.php";
    }
    function store()
    {
        $dm = $_POST['dm'];
        // $brand = $_POST['brand'];
        $ten_sp = $_POST['tensp'];
        $hinh = $_FILES['img']['name'];
        $target_dir = "../upload/";
        $target_file = $target_dir . basename($hinh);
        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
        $gia = $_POST['gia'];
        $sltk = $_POST['slsp'];
        $giakm = $_POST['giakm'];
        if (empty($_POST['hot'])) {
            $hot = 0;
        } else {
            $hot = $_POST['hot'];
        }
        $an_hien = $_POST['an_hien'];
        $mota = $_POST['mota'];
        $mota = str_replace("'", "\'", $mota);
        $trangthai = true;
        if (empty($ten_sp)) {
            $trangthai = false;
            $error_tsp = "<p class='text-danger mb-2'>Không để trống tên sản phẩm</p>";
        }
        if (empty($sltk)) {
            $trangthai = false;
            $error_sl = "<p class='text-danger mb-2'>Không để trống số lượng sản phẩm</p>";
        }
        // if (empty($hinh)) {
        //     $trangthai = false;
        //     $error_img = "<p class='text-danger mb-2'>Không để trống tên hình</p>";
        // }
        if (empty($gia)) {
            $trangthai = false;
            $error_gia = "<p class='text-danger mb-2'>Không để trống giá</p>";
        }
       if ($gia < $giakm) {
            $trangthai = false;
            $error_giakm = "<p class='text-danger mb-2'>Giá khuyến mãi phải thấp hơn giá</p>";
        }
        if (empty($mota)) {
            $trangthai = false;
            $error_mota = "<p class='text-danger mb-2' style='color:red;'>Không để trống mô tả</p>";
        }
        // var_dump($trangthai);
        if ($trangthai == false) {
            $dm = $this->models->GetALLDM();
            // $brand = $this->models->GetALLBrand();
            $views = "views/add-sanpham.php";
            require_once "views/layout.php";
        } else {
            $this->models->InsertSP($dm, $ten_sp, $hinh, $gia, $giakm, $hot, $an_hien, $mota, $sltk);
            $_SESSION['tb_sp'] = "Đã thêm thành công";
            header('location: ?ctrl=sanpham');
        }
    }
    function edit()
    {
        $id = $_GET['id'];
        $dm = $this->models->GetALLDM();
        $sp = $this->models->getSP_byID($id);
        $views = "views/edit-sp.php";
        require_once 'views/layout.php';
    }
    function update()
    {
        $dm = $_POST['dm'];
        $ten_sp = $_POST['tensp'];
        $id_sp = $_POST['id_sp'];
        if ($_FILES['img']['name'] != null) {
            $hinh = $_FILES['img']['name'];
            $target_dir = "../upload/";
            $target_file = $target_dir . basename($hinh);
            move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
        } else {
            $hinh = null;
        }
        $gia = $_POST['gia'];
        $sltk = $_POST['slsp'];
        $giakm = $_POST['giakm'];
        if (empty($_POST['hot'])) {
            $hot = 0;
        } else {
            $hot = $_POST['hot'];
        }
        $an_hien = $_POST['an_hien'];
        $mota = $_POST['mota'];
        $mota = str_replace("'", "\'", $mota);
        $trangthai = true;
        if (empty($ten_sp)) {
            $trangthai = false;
            $error_tsp = "<p class='text-danger mb-2'>Không để trống tên sản phẩm</p>";
        }
        if (empty($sltk)) {
            $trangthai = false;
            $error_sl = "<p class='text-danger mb-2'>Không để trống số lượng sản phẩm</p>";
        }
        // if (empty($hinh)) {
        //     $trangthai = false;
        //     $error_img = "<p class='text-danger mb-2'>Không để trống tên hình</p>";
        // }
        if (empty($gia)) {
            $trangthai = false;
            $error_gia = "<p class='text-danger mb-2'>Không để trống giá</p>";
        }
        if ($gia < $giakm) {
            $trangthai = false;
            $error_giakm = "<p class='text-danger mb-2'>Giá khuyến mãi phải thấp hơn giá</p>";
        }
        if (empty($mota)) {
            $trangthai = false;
            $error_mota = "<p class='text-danger mb-2' style='color:red;'>Không để trống mô tả</p>";
        }
        // var_dump($trangthai);
        if ($trangthai == false) {
            // $id = $_GET['id'];
            $dm = $this->models->GetALLDM();
            // $brand = $this->models->GetALLBrand();
            $sp = $this->models->getSP_byID($id_sp);
            $views = "views/edit-sp.php";
            require_once 'views/layout.php';
        } else {
            $this->models->Update_SP($dm, $ten_sp, $hinh, $gia, $giakm, $hot, $an_hien, $mota, $sltk, $id_sp);
            $_SESSION['tb_sp'] = "Cập nhật thành công";
            header('location: ?ctrl=sanpham');
        }
    }
    function delete()
    {
        $id_sp = $_GET['id'];
        $this->models->Delete_SP($id_sp);
        // $_SESSION['tb_sp'] = "Đã xóa thành công";
        header('location: ?ctrl=sanpham');
    }
}
