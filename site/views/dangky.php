    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Register</span>
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
                    <div class="register-form">
                        <h2>Đăng ký</h2>
                        <form action="dang-ky_" method="post">
                            <div class="row">
                                <div class="col-6">
                                    <div class="group-input">
                                        <label for="username">Họ</label>
                                        <input type="text" id="username" name="ho" value="<?=(isset($ho))? $ho:""?>">
                                        <?=(isset($_error_t)==true)? $_error_h:""?>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="group-input">
                                        <label for="username">Tên</label>
                                        <input type="text" id="username" name="ten" value="<?=(isset($ten))? $ten:""?>">
                                        <?=(isset($_error_t)==true)? $_error_t:""?>
                                    </div>
                                </div>
                            </div>
                            <div class="group-input">
                                <label for="username">Tên tài khoản</label>
                                <input type="text" id="username" name="name" value="<?=(isset($ten_tk))? $ten_tk:""?>">
                                <?=(isset($_error_tk)==true)? $_error_tk:""?>
                            </div>
                            <div class="group-input">
                                <label for="username">Email</label>
                                <input type="text" id="username" name="email" value="<?=(isset($email))? $email:""?>">
                                <?=(isset($_error_email)==true)? $_error_email:""?>
                            </div>
                            <div class="group-input">
                                <label for="pass">Mật khẩu</label>
                                <input type="password" id="pass" name="pass" value="<?=(isset($mk))? $mk:""?>">
                                <?=(isset($_error_mk)==true)? $_error_mk:""?>
                            </div>
                            <div class="group-input">
                                <label for="con-pass">Nhập lại mật khẩu</label>
                                <input type="password" id="con-pass" name="repass">
                                <?=(isset($_error_remk)==true)? $_error_remk:""?>
                            </div>
                            <button type="submit" class="site-btn register-btn">Đăng ký</button>
                           
                        </form>
                        <!-- <div class="switch-login">
                            <a href="./login.html" class="or-login">Or Login</a>
                        </div> -->
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