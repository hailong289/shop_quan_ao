
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="index.php"><i class="fa fa-home"></i>Trang chủ</a>
                        <!-- <a href="./shop.html"></a> -->
                        <span>Giỏ hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Ảnh</th>
                                    <th class="p-name">Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($_SESSION['cart'] as $key=>$sp){ ?>
                                <tr class="ct">
                                    <td class="cart-pic first-row"><img src="./upload/<?=$sp['img']?>" alt="" width="200px" height="150px"></td>
                                    <td class="cart-title first-row">
                                        <h5><?=$sp['TenSP']?></h5>
                                    </td>
                                    <td class="p-price first-row"><?=number_format($sp['Gia'],0,'','.')?> VNĐ</td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">
                                            <!-- <button>hello</button> -->
                                            <div class="pro-qty">
                                                <input type="text" name="sl" id="sl" value="<?=$sp['sl']?>">
                                                <input type="hidden" name="id_cart" id="id" value="<?=$key?>">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row Gia_up"><?=number_format($sp['Gia'] * $sp['sl'],0,'','.')?> VNĐ</td>
                                    <td class="close-td first-row"><a href="<?=SITE_URL?>/?act=cart&what=remove&id=<?=$key?>"><i class="ti-close"></i></a></td>
                                </tr>
                               <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="<?=SITE_URL?>/?act=products" class="primary-btn continue-shop">Tiếp tục mua hàng</a>
                                <!-- <a href="#" class="primary-btn up-cart">Cập nhật</a> -->
                            </div>
                            <div class="discount-coupon">
                                <h6>Mã giảm giá</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text" placeholder="Enter your codes">
                                    <button type="submit" class="site-btn coupon-btn">Áp dụng</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Giảm giá: <span>0</span></li>
                                    <li class="cart-total">Tổng tiển: <span><?=number_format($_SESSION['total'],0,'','.')?> VNĐ</span></li>
                                </ul>
                                <a href="thanh-toan" class="proceed-btn">Thanh toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

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