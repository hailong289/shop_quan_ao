<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Voler Admin Dashboard</title>
    <link rel="stylesheet" href="./views/assets/css/bootstrap.css">
    
    <link rel="shortcut icon" href="./views/assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./views/assets/css/app.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.all.min.js"></script>
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="./views/assets/images/favicon.svg" height="48" class='mb-4'>
                        <h3>Đăng nhập</h3>
                        <p>Vui lòng đăng nhập để tiếp tục đến Voler</p>
                    </div>
                    <form action="?act=checklogin" method="post">
                        <div class="form-group position-relative has-icon-left">
                            <label for="username">Tên đăng nhập</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" name="name" id="username">
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left">
                            <div class="clearfix">
                                <label for="password">Mật khẩu</label>
                                <!-- <a href="auth-forgot-password.html" class='float-right'>
                                    <small>Forgot password?</small>
                                </a> -->
                            </div>
                            <div class="position-relative">
                                <input type="password" class="form-control" id="password" name="mk">
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>

                        <div class='form-check clearfix my-4'>
                            <div class="checkbox float-left">
                                <input type="checkbox" id="checkbox1" class='form-check-input' >
                                <label for="checkbox1">Ghi nhớ</label>
                            </div>
                            <div class="float-right">
                                <a href="?act=dangky">Không có tài khoản ?</a>
                            </div>
                        </div>
                        <div class="clearfix">
                            <button class="btn btn-primary float-right">Đăng nhập</button>
                        </div>
                    </form>
                    <!-- <div class="divider">
                        <div class="divider-text">OR</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button class="btn btn-block mb-2 btn-primary"><i data-feather="facebook"></i> Facebook</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block mb-2 btn-secondary"><i data-feather="github"></i> Github</button>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="./views/assets/js/feather-icons/feather.min.js"></script>
    <script src="./views/assets/js/app.js"></script>
    
    <script src="./views/assets/js/main.js"></script>
</body>

</html>
<?php if (isset($_SESSION['tb_login']) == true) { ?>
    <script>
        Swal.fire(
            '<?= $_SESSION['tb_login'] ?>',
            '',
            'warning'
        );
    </script>
<?php unset($_SESSION['tb_login']);
} ?>
