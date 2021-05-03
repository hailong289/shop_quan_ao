<?php 
require_once "models/models-donhang.php";
class donhang{
    function __construct()
    {
        $this->model = new models_donhang;
        $act = "index";
        if(isset($_GET['act'])) $act = $_GET['act'];
        switch ($act) {
            case 'index':
                $this->index();
                break;
            case 'detail':
                $this->detail();
                break;
            case 'update':
                $this->update();
                break;
            case 'updatett':
                $this->updatett();
                break;
                break;
            default:
                # code...
                break;
        }
      
    }
    function index(){
        $title = "Danh sách đơn hàng";
        $dh = $this->model->getALL_DH();
        $views = "views/donhang.php";
        require_once "views/layout.php";
    }
    function detail(){
        $title = "Đơn hàng chi tiết";
        $id = $_GET['id'];
        // echo $id;
        $dh = $this->model->DH_detail($id);
        $dhct = $this->model->GETDH_detail($dh['ID_DH']);
        $views = "views/chitetdh.php";
        require_once "views/layout.php";
    }
    function update(){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ngay_giao = $_POST['ngay_giao'];
        $id = $_POST['id'];
        if(empty($ngay_giao)){
            $error = "Không để trống ngày giao";
            $dh = $this->model->DH_detail($id);
            $dhct = $this->model->GETDH_detail($dh['ID_DH']);
            $views = "views/chitetdh.php";
            require_once "views/layout.php";
        }else{
            $this->model->Update_DH($ngay_giao, $id);
            header('location: ?ctrl=donhang&act=detail&id='.$id);
        }
        
    }
    function updatett(){
        $id = $_POST['id'];
        $trang_thai = 2;
        $this->model->Update_TT($trang_thai, $id);
        header('location: ?ctrl=donhang&act=detail&id='.$id);
    }
}

?>