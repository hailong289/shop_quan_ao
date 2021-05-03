
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.php"><i class="fa fa-home"></i>Trang chủ</a>
                        <span>Đổi mật khẩu</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Form Section Begin -->

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Đổi mật khẩu</h2>
                        <form action="doi-mk_" method="post">
                            <div class="group-input">
                                <label for="username">Mật khẩu mới</label>
                                <input type="password" id="username" name="mk" value="<?=(isset($mk))? $mk:""?>">
                                <p class="text-danger"><?=(isset($error_mk))? $error_mk:""?></p>
                                <input type="hidden" name="id" value="<?=$id?>">
                            </div>
                            <div class="group-input">
                                <label for="username">Nhập lại mật khẩu mới</label>
                                <input type="password" id="username" name="remk">
                                <p class="text-danger"><?=(isset($error_remk))? $error_remk:""?></p>
                            </div>
                            <button type="submit" class="site-btn login-btn">Xác thực</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="./views/img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="./views/img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="./views/img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="./views/img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="./views/img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->
    <?php if(isset($_SESSION['tb_tc'])==true){ ?>
        <script>
        Swal.fire(
            '<?= $_SESSION['tb_tc'] ?>',
            '',
            'success'
        );
    </script>
    <?php unset($_SESSION['tb_tc']); } ?>