<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="https://<?=$_SERVER['SERVER_NAME'];?>/project/shopquanao/">
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Volder</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.all.min.js"></script>
    <!-- Css Styles -->
    <link rel="stylesheet" href="<?=SITE_URL?>/views/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?=SITE_URL?>/views/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?=SITE_URL?>/views/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="<?=SITE_URL?>/views/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?=SITE_URL?>/views/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?=SITE_URL?>/views/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?=SITE_URL?>/views/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?=SITE_URL?>/views/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?=SITE_URL?>/views/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        hailong28092001@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        0989429330
                    </div>
                </div>
                <div class="ht-right">
                    <?php if (isset($_SESSION['ID_USER']) == true) { ?>
                        <!-- <div class="lan-selector">
                            <select class="language_drop" name="countries" id="countries" style="width:300px;">
                                <option value='yt' data-image="<?=SITE_URL?>/views/img/flag-1.jpg" data-imagecss="flag yt" data-title="English">English</option>
                                <option value='yu' data-image="<?=SITE_URL?>/views/img/flag-2.jpg" data-imagecss="flag yu" data-title="Bangladesh">German </option>
                            </select>
                        </div> -->
                        <ul class="login-panel" style="padding-bottom: 0;position: relative;">
                            <li style="list-style: none;cursor: pointer;">
                                <p id="tt_user"><?= $_SESSION['USER'] ?></p>
                            </li>
                            <ul class="submenu-tt">
                                <li><a href="tai-khoan">Th??ng tin t??i kho???n</a></li>
                                <li><a href="doi-mk_<?=$_SESSION['ID_USER']?>">?????i m???t kh???u</a></li>
                                <li><a href="don-hang">????n h??ng</a></li>
                                <li><a href="<?= SITE_URL ?>/?act=logout">????ng xu???t</a></li>
                            </ul>
                        </ul>
                        <script>
                            $('#tt_user').click(function(e) {
                                $('.submenu-tt').toggle();
                            });
                        </script>
                    <?php } else { ?>
                        <a href="dang-nhap" class="login-panel"><i class="fa fa-user"></i>????ng nh???p</a>
                    <?php } ?>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="<?=SITE_URL?>/views/img/flag-1.jpg" data-imagecss="flag yt" data-title="English">English</option>
                            <option value='yu' data-image="<?=SITE_URL?>/views/img/flag-2.jpg" data-imagecss="flag yu" data-title="Bangladesh">German </option>
                        </select>
                    </div>
                    <!-- <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="./upload/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <div class="input-group">
                                <form action="<?=SITE_URL?>/?act=products" method="post">
                                    <input type="text" placeholder="Nh???p t??n s???n ph???m c???n t??m" name="key">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span></span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span id="tt"><?= (isset($_SESSION['countdh']) == true) ?  $_SESSION['countdh'] : "0" ?></span>
                                </a>
                                <div class="cart-hover">
                                    <?php if ($_SESSION['cart'] != null) { ?>
                                        <div class="select-items">
                                            <table>
                                                <tbody>
                                                    <?php
                                                    $_SESSION['total'] = 0;
                                                    foreach ($_SESSION['cart'] as $key => $sp) {
                                                        $_SESSION['total'] += $sp['Gia'] * $sp['sl'];
                                                    ?>
                                                        <tr>
                                                            <td class="si-pic"><img src="./upload/<?= $sp['img'] ?>" alt="" width="100px"></td>
                                                            <td class="si-text">
                                                                <div class="product-selected">
                                                                    <p><?= number_format($sp['Gia'], 0, '', '.') ?> VN??</p>
                                                                    <h6><?= $sp['TenSP'] ?></h6>
                                                                </div>
                                                            </td>
                                                            <!-- <td class="si-close">
                                                        <a href="<?= SITE_URL ?>/?act=cart&what=remove&id=<?= $key ?>">
                                                        <i class="ti-close"></i>
                                                        </a>
                                                    </td> -->
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="select-total">
                                            <span>T???ng ti???n:</span>
                                            <h5><?= number_format($_SESSION['total'], 0, '', '.') ?> VN??</h5>
                                        </div>
                                        <div class="select-button">
                                            <a href="gio-hang" class="primary-btn view-card">Gi??? h??ng</a>
                                            <a href="thanh-toan" class="primary-btn checkout-btn">Thanh to??n</a>
                                        </div>
                                    <?php } else { ?>
                                        <h5 class="text-center">Kh??ng c?? s???n ph???m trong gi???</h5>
                                    <?php } ?>
                                </div>
                            </li>
                            <!-- <li class="cart-price">$150.00</li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Danh m???c</span>
                        <ul class="depart-hover">
                            <?php foreach ($dm as $value) { ?>
                                <li><a href="danhmuc/<?= $value['slug'] ?>"><?= $value['name'] ?></a></li>
                                <!-- <li><a href="#">Men???s Clothing</a></li>
                            <li><a href="#">Underwear</a></li>
                            <li><a href="#">Kid's Clothing</a></li>
                            <li><a href="#">Brand Fashion</a></li>
                            <li><a href="#">Accessories/Shoes</a></li>
                            <li><a href="#">Luxury Brands</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li> -->
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="trang-chu">Trang ch???</a></li>
                        <li><a href="san-pham">S???n ph???m</a></li>
                        <!-- <li><a href="#">Th????ng hi???u</a>
                            <ul class="dropdown">
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>
                        </li> -->
                        <li><a href="#">Tin t???c</a></li>
                        <li><a href="#">Gi???i thi???u</a></li>
                        <li><a href="?act=lienhe">Li??n h???</a></li>
                        <!-- <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="./blog-details.html">Blog Details</a></li>
                                <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="./check-out.html">Checkout</a></li>
                                <li><a href="./faq.html">Faq</a></li>
                                <li><a href="./register.html">Register</a></li>
                                <li><a href="./login.html">Login</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <?= (isset($views) == true) ? require_once $views : " " ?>
    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="#"><img src="./upload/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>?????a ch???: TP.HCM</li>
                            <li>S??? ??i???n tho???i: +65 11.188.888</li>
                            <li>Email: hello.colorlib@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Th??ng tin</h5>
                        <ul>
                            <li><a href="#">V??? ch??ng t??i</a></li>
                            <li><a href="#">Th??? t???c thanh to??n</a></li>
                            <li><a href="#">Li??n h???</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div> -->
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Tham gia v???i ch??ng t??i ngay b??y gi???</h5>
                        <p>Nh???n th??ng tin c???p nh???t qua E-mail v??? c???a h??ng m???i nh???t c???a ch??ng t??i v?? c??c ??u ????i ?????c bi???t.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Email c???a b???n">
                            <button type="button">X??c nh???n</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <!-- <div class="copyright-text"> -->
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <!-- Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <!-- </div> -->
                        <div class="payment-pic">
                            <img src="<?=SITE_URL?>/views/img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="<?=SITE_URL?>/views/js/jquery-3.3.1.min.js"></script>
    <script src="<?=SITE_URL?>/views/js/bootstrap.min.js"></script>
    <script src="<?=SITE_URL?>/views/js/jquery-ui.min.js"></script>
    <script src="<?=SITE_URL?>/views/js/jquery.countdown.min.js"></script>
    <script src="<?=SITE_URL?>/views/js/jquery.nice-select.min.js"></script>
    <script src="<?=SITE_URL?>/views/js/jquery.zoom.min.js"></script>
    <script src="<?=SITE_URL?>/views/js/jquery.dd.min.js"></script>
    <script src="<?=SITE_URL?>/views/js/jquery.slicknav.js"></script>
    <script src="<?=SITE_URL?>/views/js/owl.carousel.min.js"></script>
    <script src="<?=SITE_URL?>/views/js/main.js"></script>
    <?php if (isset($_SESSION['camon']) == true) { ?>
        <script>
            Swal.fire(
                '<?= $_SESSION['camon'] ?>',
                '',
                'success'
            );
        </script>
    <?php unset($_SESSION['camon']);
    } ?>
    
</body>

</html>