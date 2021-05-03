<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <base href="https://hailong.com"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị shop bán hàng</title>

    <link rel="stylesheet" href="./views/assets/css/bootstrap.css">

    <link rel="stylesheet" href="./views/assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="./views/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="./views/assets/css/app.css">
    <link rel="shortcut icon" href="./views/assets/images/favicon.svg" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    $(document).ready(function () {
        setInterval(() => {
        $('#noidung').load("https://hailong.com/project/shopquanao/admin/?ctrl=home&act=dhnew");
        // refresh();
        }, 1000);
    });
    </script>
</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="./views/assets/images/logo.svg" alt="" srcset="">
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">


                        <li class='sidebar-title'>Menu</li>



                        <li class="sidebar-item active">
                            <a href="index.php" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Trang chủ</span>
                            </a>

                        </li>




                        <!-- <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>Thương hiệu</span>
                            </a>
                            <ul class="submenu p-0">
                                <li>
                                    <a href="<?= ADMIN_URL ?>/?ctrl=thuonghieu&act=add-new">Thêm thương hiệu</a>
                                </li>

                                <li>
                                    <a href="<?= ADMIN_URL ?>/?ctrl=thuonghieu&act=index">Danh sách thương hiệu</a>
                                </li>
                            </ul>
                        </li> -->




                        <!-- <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="briefcase" width="20"></i> 
                        <span>Extra Components</span>
                    </a>
                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="component-extra-avatar.html">Avatar</a>
                        </li>
                        
                        <li>
                            <a href="component-extra-divider.html">Divider</a>
                        </li>
                        
                    </ul>
                    
                </li> -->




                        <!-- <li class='sidebar-title'>Forms &amp; Tables</li> -->


                        <!--             
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="file-text" width="20"></i> 
                        <span>Form Elements</span>
                    </a>
                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="form-element-input.html">Input</a>
                        </li>
                        
                        <li>
                            <a href="form-element-input-group.html">Input Group</a>
                        </li>
                        
                        <li>
                            <a href="form-element-select.html">Select</a>
                        </li>
                        
                        <li>
                            <a href="form-element-radio.html">Radio</a>
                        </li>
                        
                        <li>
                            <a href="form-element-checkbox.html">Checkbox</a>
                        </li>
                        
                        <li>
                            <a href="form-element-textarea.html">Textarea</a>
                        </li>
                        
                    </ul>
                    
                </li> -->




                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="layout" width="20"></i>
                                <span>Sản phẩm</span>
                            </a>
                            <ul class="submenu p-0">
                                <li>
                                    <a href="<?= ADMIN_URL ?>/?ctrl=sanpham&act=add-new">Thêm sản phẩm</a>
                                </li>

                                <li>
                                    <a href="<?= ADMIN_URL ?>/?ctrl=sanpham">Danh sách sản phẩm</a>
                                </li>
                            </ul>
                        </li>




                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="layers" width="20"></i>
                                <span>Danh mục</span>
                            </a>
                            <ul class="submenu p-0">
                                <li>
                                    <a href="<?= ADMIN_URL ?>/?ctrl=danhmuc&act=add-new">Thêm danh mục</a>
                                </li>

                                <li>
                                    <a href="<?= ADMIN_URL ?>/?ctrl=danhmuc&act=index">Danh sách danh mục</a>
                                </li>
                            </ul>
                        </li>




                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="grid" width="20"></i>
                                <span>Đơn hàng</span>
                            </a>
                            <ul class="submenu p-0">
                                <li>
                                    <a href="<?=ADMIN_URL?>/?ctrl=donhang">Thêm đơn hàng</a>
                                </li>

                                <li>
                                    <a href="<?=ADMIN_URL?>/?ctrl=donhang">Danh sách đơn hàng</a>
                                </li>
                            </ul>
                        </li>




                        <!-- <li class="sidebar-item  ">
                    <a href="table-datatable.html" class='sidebar-link'>
                        <i data-feather="file-plus" width="20"></i> 
                        <span>Đơn hàng chi </span>
                    </a>
                    
                </li> -->




                        <!-- <li class='sidebar-title'>Extra UI</li> -->



                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="user" width="20"></i>
                                <span>Khách hàng</span>
                            </a>
                            <ul class="submenu p-0">
                                <li>
                                    <a href="<?=ADMIN_URL?>/?ctrl=user&act=add">Thêm khách hàng</a>
                                </li>

                                <li>
                                    <a href="<?=ADMIN_URL?>/?ctrl=user">Danh sách khách hàng</a>
                                </li>
                            </ul>
                        </li>




                        <!-- <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="trending-up" width="20"></i> 
                        <span>Quản trị</span>
                    </a>
                    <ul class="submenu p-0">   
                        <li>
                            <a href="ui-chatbox.html">Thêm admin</a>
                        </li>
                        
                        <li>
                            <a href="ui-pricing.html">Danh sách ad</a>
                        </li> 
                    </ul>
                </li> -->




                        <!-- <li class='sidebar-title'>Pages</li>
            
            
            
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="user" width="20"></i> 
                        <span>Authentication</span>
                    </a>
                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="auth-login.html">Login</a>
                        </li>
                        
                        <li>
                            <a href="auth-register.html">Register</a>
                        </li>
                        
                        <li>
                            <a href="auth-forgot-password.html">Forgot Password</a>
                        </li>
                        
                    </ul>
                    
                </li> -->




                        <!-- <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="alert-circle" width="20"></i> 
                        <span>Errors</span>
                    </a>
                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="error-403.html">403</a>
                        </li>
                        
                        <li>
                            <a href="error-404.html">404</a>
                        </li>
                        
                        <li>
                            <a href="error-500.html">500</a>
                        </li>
                        
                    </ul>
                    
                </li> -->




                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                        <li class="dropdown nav-icon">
                            <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                              <span class="bage text-danger">3</span>
                                <div class="d-lg-inline-block">
                                    <i data-feather="bell"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-large">
                                <h6 class='py-2 px-4'>Notifications</h6>
                                <ul class="list-group rounded-none">
                                    <li class="list-group-item border-0 align-items-start">
                                        <div class="avatar bg-success mr-3">
                                            <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                                        </div>
                                        <div>
                                            <h6 class='text-bold'>New Order</h6>
                                            <p class='text-xs'>
                                                An order made by Ahmad Saugi for product Samsung Galaxy S69
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- <li class="dropdown nav-icon mr-2">
                            <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="mail"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i>Đăng xuất</a>
                            </div>
                        </li> -->
                        <?php if(isset($_SESSION['VT_ADMIN'])){ ?>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar mr-1">
                                 <?php if($_SESSION['img'] == null){ ?>
                                    <img src="../upload/user.jpg" alt="" srcset="">
                                </div>
                                <?php }else{ ?>
                                    <img src="../upload/<?=$_SESSION['img']?>" alt="" srcset="">
                                <?php } ?>
                                <div class="d-none d-md-block d-lg-inline-block"><?=$_SESSION['name_admin']?></div>
                            </a>
                          
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item active" href="#"><i data-feather="user"></i>Thông tin tài khoản</a>
                                <a class="dropdown-item" href="#"><i data-feather="mail"></i>Tin nhắn</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i>Cài đặt</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="?ctrl=home&act=logout"><i data-feather="log-out"></i> Đăng xuất</a>
                            </div>
                           
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>

            <div class="main-content container-fluid" style="margin-bottom: 200px;">
                <div class="page-title mb-4">
                    <h3><?= (isset($title) == true) ? $title : '' ?></h3>
                    <!-- <p class="text-subtitle text-muted">A good dashboard to display your statistics</p> -->
                </div>
                <?php if (isset($views) == true) require_once $views;
                else echo "Trang chủ" ?>
            </div>

            <footer class="bg-body border-top">
                <div class="footer clearfix mb-0 text-muted">
                    <div class="text-center">
                        <p>2020 &copy;</p>
                    </div>
                    <!-- <div class="float-right">
                        <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="http://ahmadsaugi.com">Ahmad Saugi</a></p>
                    </div> -->
                </div>
            </footer>
        </div>
    </div>
    <script src="./views/assets/js/feather-icons/feather.min.js"></script>
    <script src="./views/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="./views/assets/js/app.js"></script>

    <script src="./views/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="./views/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="./views/assets/js/pages/dashboard.js"></script>

    <script src="./views/assets/js/main.js"></script>
    <script>
        CKEDITOR.replace('mota');
    </script>
</body>

</html>
<?php if (isset($_SESSION['tb_login']) == true) { ?>
    <script>
        Swal.fire(
            '<?= $_SESSION['tb_login'] ?>',
            '',
            'success'
        );
    </script>
<?php unset($_SESSION['tb_login']);
} ?>