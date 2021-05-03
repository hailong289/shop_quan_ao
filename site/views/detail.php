<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                    <a href="./shop.html">Shop</a>
                    <span>Detail</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad page-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="filter-widget">
                    <h4 class="fw-title">Danh mục</h4>
                    <ul class="filter-catagories">
                        <?php foreach ($dm as $dm) { ?>
                            <li><a href="danhmuc/<?= $dm['slug'] ?>"><?= $dm['name'] ?></a></li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="filter-widget">
                    <h4 class="fw-title">Price</h4>
                    <div class="filter-range-wrap">
                        <div class="range-slider">
                            <div class="price-input">
                                <input type="text" id="minamount">
                                <input type="text" id="maxamount">
                            </div>
                        </div>
                        <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="33" data-max="98">
                            <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                        </div>
                    </div>
                    <a href="#" class="filter-btn">Filter</a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-pic-zoom" style="height: 500px;">
                            <img class="product-big-img" src="./upload/<?= $product['img'] ?>" alt="">
                            <div class="zoom-icon">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                        <!-- <div class="product-thumbs">
                                <div class="product-thumbs-track ps-slider owl-carousel">
                                    <div class="pt active" data-imgbigurl="./views/img/product-single/product-1.jpg"><img
                                            src="./views/img/product-single/product-1.jpg" alt=""></div>
                                    <div class="pt" data-imgbigurl="./views/img/product-single/product-2.jpg"><img
                                            src="./views/img/product-single/product-2.jpg" alt=""></div>
                                    <div class="pt" data-imgbigurl="./views/img/product-single/product-3.jpg"><img
                                            src="./views/img/product-single/product-3.jpg" alt=""></div>
                                    <div class="pt" data-imgbigurl="./views/img/product-single/product-3.jpg"><img
                                            src="./views/img/product-single/product-3.jpg" alt=""></div>
                                </div>
                            </div> -->
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details">
                            <div class="pd-title">
                                <!-- <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a> -->
                                <h3><?= $product['name'] ?></h3>

                            </div>
                            <div class="pd-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span>(5)</span>
                            </div>
                            <div class="pd-desc">
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor
                                        sit amet, consectetur adipisicing elit, sed do mod tempor</p> -->
                                <h4>Giá: <?= number_format($product['gia'], 0, '', '.') ?> VNĐ<span></span></h4>
                            </div>
                            <div class="pd-color">
                                <h6>Màu sắc</h6>
                                <div class="pd-color-choose">
                                    <div class="cc-item">
                                        <input type="radio" id="cc-black">
                                        <label for="cc-black"></label>
                                    </div>
                                    <div class="cc-item">
                                        <input type="radio" id="cc-yellow">
                                        <label for="cc-yellow" class="cc-yellow"></label>
                                    </div>
                                    <div class="cc-item">
                                        <input type="radio" id="cc-violet">
                                        <label for="cc-violet" class="cc-violet"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="pd-size-choose">
                                <div class="sc-item">
                                    <input type="radio" id="sm-size">
                                    <label for="sm-size">s</label>
                                </div>
                                <div class="sc-item">
                                    <input type="radio" id="md-size">
                                    <label for="md-size">m</label>
                                </div>
                                <div class="sc-item">
                                    <input type="radio" id="lg-size">
                                    <label for="lg-size">l</label>
                                </div>
                                <div class="sc-item">
                                    <input type="radio" id="xl-size">
                                    <label for="xl-size">xs</label>
                                </div>
                            </div>
                            <!-- <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                                <a href="#" class="primary-btn pd-cart">Thêm giỏ hàng</a>
                            </div> -->
                            <div class="row mb-4">
                                <div class="col-12 pr-2">
                                    <a href="add-cart-<?=$product['ID_SP']?>" class="primary-btn bg-danger text-center w-100">Mua ngay</a>
                                </div>
                            </div>
                            <ul class="pd-tags">
                                <li><span>Danh mục</span>: <?= $name ?></li>
                                <!-- <li><span>TAGS</span>: Clothing, T-shirt, Woman</li> -->
                            </ul>
                            <!-- <div class="pd-share">
                                    <div class="p-code">Sku : 00012</div>
                                    <div class="pd-social">
                                        <a href="#"><i class="ti-facebook"></i></a>
                                        <a href="#"><i class="ti-twitter-alt"></i></a>
                                        <a href="#"><i class="ti-linkedin"></i></a>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                </div>
                <div class="product-tab">
                    <div class="tab-item">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#tab-1" role="tab">Mô tả</a>
                            </li>

                            <li>
                                <a data-toggle="tab" href="#tab-3" role="tab" class="sl_bl2">Bình luận (<?= $sl_bl ?>)</a>
                            </li>
                        </ul>

                    </div>
                    <div class="tab-item-content">
                        <div class="tab-content">
                            <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                <div class="product-content">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- <h5>Introduction</h5> -->
                                            <?= $product['mota'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab-3" role="tabpanel">

                                <div class="customer-review-option">
                                    <h4 class="sl_bl"><?= $sl_bl ?> Bình luận</h4>
                                    <div class="comment-option" id="data_bl">
                                        <?php foreach ($bl as $nd) { ?>
                                            <div class="co-item">
                                                <div class="avatar-pic">
                                                    <img src="./upload/user.jpg" alt="">
                                                </div>
                                                <div class="avatar-text">
                                                    <!-- <div class="at-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div> -->
                                                    <h5><?php echo $this->model->GetName_BL($nd['ID_User']); ?> <span><?= $nd['date'] ?></span></h5>
                                                    <div class="at-reply"><?= $nd['noidung'] ?></div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <!-- <div class="personal-rating">
                                        <h6>Your Ratind</h6>
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div> -->
                                    <?php if (isset($_SESSION['ID_USER']) == true) { ?>
                                        <div class="leave-comment">
                                            <h4>Để lại bình luận</h4>
                                            <form action="#" class="comment-form">
                                                <div class="row">
                                                    <!-- <div class="col-lg-6">
                                                        <input type="text" placeholder="Name">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="Email">
                                                    </div> -->
                                                    <div class="col-lg-12">
                                                        <textarea placeholder="Bình luận" name="comment" id="comment"></textarea>
                                                        <input type="hidden" name="id" value="<?= $_SESSION['ID_USER'] ?>">
                                                        <input type="hidden" name="id_sp" value="<?=$product['ID_SP']?>">
                                                        <button type="button" class="site-btn" id="binhluan">Gửi</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <script>
                                                $(document).ready(function() {
                                                    $('#binhluan').click(function(e) {
                                                        // e.preventDefault();

                                                        id = $('input[name=id]').val();
                                                        id_sp = $('input[name=id_sp]').val();
                                                        noidung = $('#comment').val();
                                                        $.post("https://hailong.com/project/shopquanao/site/?act=binhluan", {
                                                                id: id,
                                                                id_sp: id_sp,
                                                                noidung: noidung
                                                            },
                                                            function(data, textStatus, jqXHR) {
                                                                $('#tab-1').removeClass('active');
                                                                // console.log(data);
                                                                $('#tab-3').addClass('active');
                                                                a = JSON.parse(data);
                                                                $('#comment').val('');
                                                                // $().load();
                                                                $('.sl_bl').text(a.sl_bl + " Bình luận");
                                                                $('.sl_bl2').text("Bình luận "+"("+a.sl_bl+")");
                                                                $('#data_bl').html(a.noidung);
                                                                // window.location.reload();
                                                            });
                                                    });
                                                });
                                            </script>
                                        </div>
                                </div>
                            <?php } else { ?>
                                <a href="<?= SITE_URL ?>/?act=dangnhap" class="text-dark">Đăng nhập để bình luận</a>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Shop Section End -->

<!-- Related Products Section End -->
<div class="related-products spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Sản phẩm liên quan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($product_lq as $sp) { ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="./upload/<?= $sp['img'] ?>" alt="" height="300px" width="100%" style="object-fit: cover;">
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
                            <div class="catagory-name">Coat</div>
                            <a href="<?= $sp['slug'] ?>.html">
                                <h5><?= $sp['name'] ?></h5>
                            </a>
                            <div class="product-price">
                                <?= number_format($sp['gia'], 0, '', '.') ?> VNĐ
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Related Products Section End -->

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