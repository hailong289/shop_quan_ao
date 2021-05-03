<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="./views/assets/css/bootstrap.css">
    
    <link rel="shortcut icon" href="./views/assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="./views/assets/css/app.css">
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-7 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="./views/assets/images/favicon.svg" height="48" class='mb-4'>
                        <h3>Đăng ký</h3>
                        <p>Vui lòng điền thông tin để đăng ký</p>
                    </div>
                    <form action="?act=insert" method="post">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Họ</label>
                                    <input type="text" id="first-name-column" class="form-control"  name="ho" value="<?=(isset($ho))? $ho:""?>">
                                    <?=(isset($error_h)==true)?  $error_h:""?>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="last-name-column">Tên</label>
                                    <input type="text" id="last-name-column" class="form-control"  name="ten" value="<?=(isset($ten))? $ten:""?>">
                                    <?=(isset($error_t)==true)?  $error_t:""?>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="username-column">Tên đăng nhập</label>
                                    <input type="text" id="username-column" class="form-control" name="name" value="<?=(isset($ten_dn))? $ten_dn:""?>">
                                    <?=(isset($error_tdn)==true)?  $error_tdn:""?>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="country-floating">Mật khẩu</label>
                                    <input type="password" id="country-floating" class="form-control" name="pass" value="<?=(isset($mk))? $mk:""?>">
                                    <?=(isset($error_mk)==true)?  $error_mk:""?>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="company-column">Số điện thoại</label>
                                    <input type="text" id="company-column" class="form-control" name="sdt" value="<?=(isset($sdt))? $sdt:""?>">
                                    <?=(isset($error_sdt)==true)?  $error_sdt:""?>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email-id-column">Email</label>
                                    <input type="email" id="email-id-column" class="form-control" name="email">
                                    <?=(isset($error_email)==true)?  $error_email:""?>
                                </div>
                            </div>
                        </diV>

                                <a href="index.php">Đăng nhập</a>
                        <div class="clearfix">
                            <button class="btn btn-primary float-right">Đăng ký</button>
                        </div>
                    </form>
                   
                   
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
