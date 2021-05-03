<?php 
require_once "models/models-danhmuc.php";
class danhmuc{
    function __construct()
    {
        $this->model = new models_danhmuc;
        $act = "index";
        if(isset($_GET['act'])) $act = $_GET['act'];
        switch ($act) {
            case 'index':
                $this->index();
                break;
            case 'add-new':
                $this->addnew();
                break;
            case 'insert':
                $this->store();
                break;
            case 'edit':
                $this->edit();
                break;
            case 'update':
                $this->update();
                break;
            case 'delete':
                $this->delete_dm();
                break;
            default:
                # code...
                break;
        }
      
    }
    function index(){
        $title = "Danh sách danh mục";
        $ds_dm = $this->model->getALlDMBYDESC();
        // var_dump($ds_dm);
        $views = "views/ds-dm.php";
        require_once "views/layout.php";
    }
    function addnew(){
        $views = "views/add-dm.php";
        require_once "views/layout.php";
    }
    function store(){
        $ten_dm = $_POST['name'];
        $an_hien = $_POST['an_hien'];
        if(empty($ten_dm)){
            $error = "Không để trống tên danh mục";
            $views = "views/add-dm.php";
            require_once "views/layout.php";
        }else{
           $this->model->add_DM($ten_dm, $an_hien);
           $_SESSION['tb_dm'] = "Đã thêm thành công";
           header('location: ?ctrl=danhmuc');
        }
    }
    function edit(){
        $id_dm = $_GET['id'];
        $dm = $this->model->getDMdetail($id_dm);
        $views = "views/edit-dm.php";
        require_once "views/layout.php";
    }
    function update(){
        $ten_dm = $_POST['name'];
        $an_hien = $_POST['an_hien'];
        $id_dm = $_POST['id'];
        if(empty($ten_dm)){
            $error = "Không để trống tên danh mục";
            $views = "views/edit-dm.php";
            require_once "views/layout.php";
        }else{
           $this->model->UpdateDm($ten_dm, $an_hien, $id_dm);
           $_SESSION['tb_dm'] = "Đã cập nhật thành công";
           header('location: ?ctrl=danhmuc');
        }
    }
    function delete_dm(){
        $id_dm = $_GET['id'];
        $this->model->Delete_DM($id_dm);
        $title = "Danh sách danh mục";
        $ds_dm = $this->model->getALlDMBYDESC();
        // var_dump($ds_dm);
        $views = "views/ds-dm.php";
        require_once "views/layout.php";
    }
}

?>