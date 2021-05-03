<?php
require_once "models/models-thongke.php";
class home
{
    function __construct()
    {
        $this->model = new thongke;
        $act = "index";
        if (isset($_GET['act'])) $act = $_GET['act'];
        switch ($act) {
            case 'index':
                $this->index();
                break;
            case 'logout':
                $this->logout();
                break;
                // case 'user_online':
                //     $this->user_online();
                //     break;
            case 'doanhthu':
                $this->doanhthu();
                break;
            case 'dhnew':
                $this->dh();
                break;
            default:
                # code...
                break;
        }
    }
    function index()
    {
        $title = "Trang chủ";
        $sl_user = $this->model->Thongke_User();
        $sanphambc = $this->model->Sp_Bc();
        $dh = $this->model->DH_NEW();
        $sl_dh = $this->model->ThongkeDH();
        $sl_doanhthu = $this->model->DoanhThuNam();
        $doanhthu_namTruoc = $this->model->DoanhThuNamTruoc();
        // $pt_nam = ($sl_doanhthu - $doanhthu_namTruoc) / 100;
        // $thang= $this->model->GetThang_DH();
        // var_dump($pt_nam);
        // var_dump($thang);
        // for ($i = 1; $i <= 12; $i++) {
        //     $months[]['thang'] = date("Y-m", strtotime(date('Y-m-01') . " -$i months"));
        // }
        
        // echo "<pre>";
        // print_r($months);
        // echo "</pre>";
        $thang = $this->model->GetMonthDH();
        // var_dump(json_encode($thang));
        $sl_sp = $this->model->Thongke_SP();
        $sl_dm = $this->model->Thongke_DM();
        $views = 'views/thongke.php';
        require_once 'views/layout.php';
    }
    function doanhthu()
    {
        for ($i = 1; $i <= 12; $i++) {
            $months[] = date("Y-m", strtotime(date('Y-m-01') . " -$i months"));
        }
        $data = ['thang'=>$months];
        echo json_encode($data);
    }
    // function user_online(){
    //     $sl_online = $this->model->CountUser_online();
    //     echo $sl_online;
    // }
    function logout()
    {
        session_destroy();
        header('location: index.php');
    }
    function dh(){
        $dh = $this->model->DH_NEW();
        require_once "views/dh-new.php";
    }
}
