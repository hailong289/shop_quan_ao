<?php
session_start();
if(isset($_SESSION['VT_ADMIN']) && $_SESSION['VT_ADMIN']==1){
require_once '../system/config.php';
define('ARR_CONTROLER',['home','donhang','sanpham','thuonghieu','user','danhmuc']);

$ctrl = "home";

if(isset($_GET['ctrl'])) $ctrl = $_GET['ctrl'];
if(in_array($ctrl, ARR_CONTROLER)==false) die('địa chỉ không tồn tại');
$pathFile = "controllers/$ctrl.php";
if(file_exists($pathFile)==true){
    require_once $pathFile;
    $controller = new $ctrl;
} 

}else{
    require_once "login.php";
    $login = new Login;
    
}


?>