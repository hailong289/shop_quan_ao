
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="<?=SITE_URL?>/views/img/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- <span>Nữ</span> -->
                            <h1>Black friday</h1>
                            <p>Giảm giá cực sốc chỉ trong ngày hôm nay </p>
                            <a href="#" class="primary-btn">Mua ngay</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="<?=SITE_URL?>/views/img/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <!-- <span>Bag,kids</span> -->
                            <h1>Black friday</h1>
                            <p>Giảm giá cực sốc chỉ trong ngày hôm nay </p>
                            <a href="#" class="primary-btn">Mua ngay</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <?php foreach ($dm_3 as $dm) { ?>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="<?=SITE_URL?>/views/img/<?=$dm['img']?>" alt="">
                        <div class="inner-text">
                            <h4><a href="danhmuc/<?=$dm['slug']?>" style="text-decoration: none;color: black;"><?=$dm['name']?></a></h4>
                        </div>
                    </div>
                </div>
              
                <?php  } ?>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="<?=SITE_URL?>/views/img/products/women-large.jpg">
                        <h2>Nữ</h2>
                        <a href="danhmuc/quan-ao-nu">Xem thêm</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Sản phẩm mới</li>
                            <!-- <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li> -->
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                    <?php foreach($cate_woman as $sp){ ?>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="./upload/<?=$sp['img']?>" alt="" height="320px">
                                <!-- <div class="sale">Khuyến mãi</div> -->
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="<?= $sp['slug'] ?>.html">Xem ngay</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Coat</div>
                                <a href="<?= $sp['slug'] ?>.html">
                                    <h5><?=$sp['name']?></h5>
                                </a>
                                <div class="product-price">
                                    <?=number_format($sp['gia'],0,' ','.')?> VNĐ
                                    <!-- <span>$35.00</span> -->
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- <div class="product-item">
                            <div class="pi-pic">
                                <img src="<?=SITE_URL?>/views/img/products/women-2.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Shoes</div>
                                <a href="#">
                                    <h5>Guangzhou sweater</h5>
                                </a>
                                <div class="product-price">
                                    $13.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="<?=SITE_URL?>/views/img/products/women-3.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towel</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="<?=SITE_URL?>/views/img/products/women-4.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towel</div>
                                <a href="#">
                                    <h5>Converse Shoes</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Deal Of The Week Section Begin-->
    <section class="deal-of-week set-bg spad" data-setbg="<?=SITE_URL?>/views/img/products/women-3.jpg" style="object-fit: contain;">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Chỉ có trong tuần</h2>
                    <p>Sản phẩm mới được ra mắt đang được giảm giá chỉ còn</p>
                    <div class="product-price">
                        200.000 
                        <span>/ VNĐ</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Ngày</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Giờ</p>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <p>Giây</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="#" class="primary-btn">Mua ngay</a>
            </div>
        </div>
    </section>
    <!-- Deal Of The Week Section End -->

    <!-- Man Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Bán chạy</li>
                            <!-- <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li> -->
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                    <?php foreach( $cate_man as $sp){ ?>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="./upload/<?=$sp['img']?>" alt="" height="320px">
                                <!-- <div class="sale">Sale</div> -->
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="<?= $sp['slug'] ?>.html">Xem ngay</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <!-- <div class="catagory-name">Coat</div> -->
                                <a href="<?= $sp['slug'] ?>.html">
                                    <h5><?=$sp['name']?></h5>
                                </a>
                                <div class="product-price">
                                    <?=number_format($sp['gia'],0,' ','.')?> VNĐ
                                    <!-- <span>$35.00</span> -->
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- <div class="product-item">
                            <div class="pi-pic">
                                <img src="<?=SITE_URL?>/views/img/products/man-2.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Shoes</div>
                                <a href="#">
                                    <h5>Guangzhou sweater</h5>
                                </a>
                                <div class="product-price">
                                    $13.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="<?=SITE_URL?>/views/img/products/man-3.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towel</div>
                                <a href="#">
                                    <h5>Pure Pineapple</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div>
                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="<?=SITE_URL?>/views/img/products/man-4.jpg" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="#">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">Towel</div>
                                <a href="#">
                                    <h5>Converse Shoes</h5>
                                </a>
                                <div class="product-price">
                                    $34.00
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="<?=SITE_URL?>/views/img/products/man-large.jpg">
                        <h2>Nam</h2>
                        <a href="danhmuc/quan-ao-nam">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Man Banner Section End -->

    <!-- Instagram Section Begin -->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="<?=SITE_URL?>/views/img/insta-1.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="<?=SITE_URL?>/views/img/insta-2.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="<?=SITE_URL?>/views/img/insta-3.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="<?=SITE_URL?>/views/img/insta-4.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="<?=SITE_URL?>/views/img/insta-5.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="<?=SITE_URL?>/views/img/insta-6.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
    </div>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Bài viết</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="./upload/blog1.jpg" alt="" height="280px" style="object-fit: cover;">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                   Tháng 4,2021
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="#">
                                <h4>Quần Culottes Là Gì? Cách Phối Đồ Với Quần Culottes Cực Xinh Cho Phái Đẹp</h4>
                            </a>
                            <p>Với tính chất thời thượng và sang chảnh, những thông tin có liên quan đến quần culottes cũng tạo được sự thu hút nhất định. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="./upload/log2.jpg" alt="" height="280px" style="object-fit: cover;">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    Tháng 4,2021
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="#">
                                <h4>Áo Dài Cách Tân Mặc Với Quần Gì? Những Cách Phối Đồ Với Áo Dài Cách Tân Đẹp Rạng Rỡ</h4>
                            </a>
                            <p>Bên cạnh các Shop bán áo dài cách tân đẹp, áo dài cách tân mặc với quần gì cũng là đề tài được mọi nhiều quan tâm không kém.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-blog">
                        <img src="./upload/blog3.jpg" alt="" height="280px" style="object-fit: cover;">
                        <div class="latest-text">
                            <div class="tag-list">
                                <div class="tag-item">
                                    <i class="fa fa-calendar-o"></i>
                                    Tháng 4,2021
                                </div>
                                <div class="tag-item">
                                    <i class="fa fa-comment-o"></i>
                                    5
                                </div>
                            </div>
                            <a href="#">
                                <h4>Tổng Hợp 10 Kiểu Áo Dài Cách Tân Được Yêu Thích Nhất</h4>
                            </a>
                            <p>Áo dài là loại trang phục truyền thống của người Việt Nam, hiện nay áo dài cách tân đã được làm mới lại để người mặc cảm thấy thoải mái và tiện lợi hơn.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="<?=SITE_URL?>/views/img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Miễn phí ship</h6>
                                <p>Với đơn hàng trên 500.000 VNĐ</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="<?=SITE_URL?>/views/img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Giao hàng nhanh</h6>
                                <p>Giao hàng nhanh nhất có thể</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="<?=SITE_URL?>/views/img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Thanh toán</h6>
                                <p>Thanh toán an toàn 100%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="<?=SITE_URL?>/views/img/logo-carousel/logo-1.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="<?=SITE_URL?>/views/img/logo-carousel/logo-2.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="<?=SITE_URL?>/views/img/logo-carousel/logo-3.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="<?=SITE_URL?>/views/img/logo-carousel/logo-4.png" alt="">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="<?=SITE_URL?>/views/img/logo-carousel/logo-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->
