<?php
require_once "models/models-user.php";
class user
{
    public $model;
    function __construct()
    {
        $this->model = new models_user;
        $act = "index";
        if (isset($_GET['act'])) $act = $_GET['act'];
        switch ($act) {
            case 'index':
                $this->index();
                break;
            case 'add':
                $this->add();
                break;
            case 'store':
                $this->store();
                break;
            default:
                # code...
                break;
        }
    }
    function index()
    {
        // echo 'user';
        $title = "Danh sách khách hàng ";
        $ds_user = $this->model->List_User();
        $views = "views/ds-user.php";
        require_once "views/layout.php";
    }
    function add()
    {
        $title = "Thêm khách hàng ";
        $views = "views/add-user.php";
        require_once "views/layout.php";
    }
    function store()
    {
        $tentk = $_POST['tentk'];
        $hoten = $_POST['hoten'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $mk = $_POST['mk'];
        $path = '../upload/';
        if ($_FILES['img']['name'] != null) {
            $img = $_FILES['img']['name'];
            $target_files = $path . basename($img);
            move_uploaded_file($_FILES['img']['tmp_name'], $target_files);
        } else {
            $img = null;
        }
        $vai_tro = $_POST['vai_tro'];
        $an_hien = $_POST['an_hien'];
        $trangthai = true;
        if (empty($tentk)) {
            $trangthai = false;
            $error_tk = "<p class='text-danger'>Không để trống tên tài khoản</p>";
        }
        if (empty($hoten)) {
            $trangthai = false;
            $error_ht = "<p class='text-danger'>Không để trống tên</p>";
        }
        if (empty($email)) {
            $trangthai = false;
            $error_email = "<p class='text-danger'>Không để trống email</p>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $trangthai = false;
            $error_email = "<p class='text-danger'>Email không hợp lệ</p>";
        }
        if (empty($sdt)) {
            $trangthai = false;
            $error_sdt = "<p class='text-danger'>Không để trống số điện thoại</p>";
        }
        if (empty($mk)) {
            $trangthai = false;
            $error_mk = "<p class='text-danger'>Không để trống mật khẩu</p>";
        }
        if ($trangthai != false) {
            $mk_hash = password_hash($mk, PASSWORD_DEFAULT);
            $this->model->Insert_Customer_new($hoten, $tentk, $mk_hash, $sdt, $email, $vai_tro,$img, $an_hien);
            header('location: ?ctrl=donhang');
        } else {
            $views = "views/add-user.php";
            require_once "views/layout.php";
        }
    }
}
