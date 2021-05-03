<?php 
require_once "models/models-user.php";
// require_once "views/login.php";
class Login{
    function __construct()
    {
        $this->model = new models_user;
        $act = 'index';
        if(isset($_GET['act'])) $act = $_GET['act'];
        switch ($act) {
            case 'index':
                $this->index();
                break;
            case 'checklogin':
                $this->login();
                break;
            case 'dangky':
                $this->SignUP();
                break;
            case 'insert':
                $this->Insert();
                break;
            default:
                # code...
                break;
        }
    }
    function index(){
        require_once "views/login.php";
    }
    function login(){
        $ten_dn = $_POST['name'];
        $mk = $_POST['mk'];
        $mk_hash = md5($ten_dn.$mk);
        $check = $this->model->Check_USER($ten_dn, $mk_hash);
        if(is_array($check)==true){
            if($check['vai_tro']==1){
                $_SESSION['VT_ADMIN'] = $check['vai_tro'];
                $_SESSION['name_admin'] = $check['ho_ten'];
                $_SESSION['img'] = $check['hinh'];
                $_SESSION['tb_login'] = "Đăng nhập thành công !";
                header('location: index.php');
            }else{
                $_SESSION['tb_login'] = "Đăng nhập không thành công !";
                require_once "views/login.php";
            }
        }else{
            $_SESSION['tb_login'] = "Đăng nhập không thành công !";
            require_once "views/login.php";
        }
        require_once "views/login.php";
    }
    function SignUP(){
        require_once 'views/dangky.php';
    }
    function Insert(){
        $ho = trim(strip_tags( $_POST['ho']));
        $ten = trim(strip_tags( $_POST['ten']));
        $hoten = $ho . $ten;
        $ten_dn = trim(strip_tags($_POST['name'])); 
        $mk = trim(strip_tags($_POST['pass']));
        $mk_hash = md5($ten_dn.$mk);
        $sdt = trim(strip_tags($_POST['sdt']));
        $email = trim(strip_tags($_POST['email']));
        $vaitro = 1;
        $trangthai = true;
        if(empty($ho)){
            $trangthai = false;
            $error_h = "<p class='text-danger mb-1'>Không để trống họ</p>";
        }
        if(empty($ten)){
            $trangthai = false;
            $error_t = "<p class='text-danger mb-1'>Không để trống tên</p>";
        }
        if(empty($ten_dn)){
            $trangthai = false;
            $error_tdn = "<p class='text-danger mb-1'>Không để trống tên đăng nhập</p>";
        }
        if(empty($mk)){
            $trangthai = false;
            $error_mk = "<p class='text-danger mb-1'>Không để trống mật khẩu</p>";
        }
        if(empty($sdt)){
            $trangthai = false;
            $error_sdt = "<p class='text-danger mb-1'>Không để trống số điện thoại</p>";
        }
        if(empty($email)){
            $trangthai = false;
            $error_email = "<p class='text-danger mb-1'>Không để trống email</p>";
        }
        // echo $trangthai;
        // var_dump($trangthai);
        if($trangthai == true){
            $this->model->Insert_Customer($hoten, $ten_dn, $mk_hash, $sdt, $email, $vaitro);
            header('location: index.php');
        }else{
            require_once 'views/dangky.php';
        }
        // echo $hoten . "/ " . $ten_dn . " / ". $mk . " / " . $sdt . " / " .$email;

    }

}
// $login = new Login;
?>