<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="index.php"><i class="fa fa-home"></i>Trang chủ</a>
                    <!-- <a href="./shop.h">Shop</a> -->
                    <span>Thanh toán</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Shopping Cart Section Begin -->
<section class="checkout-section spad">
    <div class="container">
        <form action="thanh-toan-dh" class="checkout-form" method="post">
            <div class="row">
                <div class="col-lg-6">
                    <!-- <div class="checkout-content">
                            <a href="#" class="content-btn">Click Here To Login</a>
                        </div> -->
                    <h4>Thông tin khách hàng</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="fir">Họ tên<span>*</span></label>
                            <input type="text" id="fir" name="hoten" value="<?=(isset($_SESSION['USER']))? $_SESSION['USER']:""?>">
                            <?=(isset($error_ht))? $error_ht:""?>
                        </div>
                        <!-- <div class="col-lg-6">
                                <label for="last">Last Name<span>*</span></label>
                                <input type="text" id="last">
                            </div> -->
                        <!-- <div class="col-lg-12">
                                <label for="cun-name">Company Name</label>
                                <input type="text" id="cun-name">
                            </div> -->
                        <!-- <div class="col-lg-12">
                                <label for="cun">Thành phố<span>*</span></label>
                                <input type="text" id="cun">
                            </div> -->
                        <div class="col-lg-12">
                            <label for="street">Địa chỉ<span>*</span></label>
                            <input type="text" id="street" class="street-first" name="tenduong" value="<?=(isset($tend))? $tend:""?>">
                            <?=(isset($error_td))? $error_td:""?>
                            <!-- <input type="text"> -->
                        </div>
                        <div class="col-lg-12">
                            <label for="zip">Huyện / Quận</label>
                            <input type="text" id="zip" name="hq" value="<?=(isset($huyenq))? $huyenq:""?>">
                            <?=(isset($error_hq))? $error_hq:""?>
                        </div>
                        <div class="col-lg-12">
                            <label for="town"> Tỉnh / Thành phố<span>*</span></label>
                            <input type="text" id="town" name="ttp" value="<?=(isset($tp))? $tp:""?>">
                            <?=(isset($error_tp))? $error_tp:""?>
                        </div>
                        <div class="col-lg-6">
                            <label for="email">Email<span>*</span></label>
                            <input type="text" id="email" name="email" value="<?=(isset($email))? $email:""?>">
                            <?=(isset($error_email))? $error_email:""?>
                        </div>
                        <div class="col-lg-6">
                            <label for="phone">Số điện thoại<span>*</span></label>
                            <input type="text" id="phone" name="sdt" value="<?=(isset($sdt))? $sdt:""?>">
                            <?=(isset($error_sdt))? $error_sdt:""?>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-floating">
                            <label for="floatingTextarea2">Ghi chú</label>
                                <textarea class="form-control" name="gc" placeholder="Ghi chú" id="floatingTextarea2" style="height: 150px"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- <div class="checkout-content">
                        <input type="text" placeholder="Enter Your Coupon Code">
                    </div> -->
                    <div class="place-order">
                        <h4>Đơn hàng của bạn</h4>
                        <div class="order-total">
                            <ul class="order-table">
                                <li>Sản phẩm <span>Tổng</span></li>
                                <?php foreach($_SESSION['cart'] as $sp){ ?>
                                <li class="fw-normal"><?=substr($sp['TenSP'],0,20)?>... x <?=$sp['sl']?> <span><?=number_format($sp['Gia'],0,'','.')?> VNĐ</span></li>
                                <?php } ?>
                                <!-- <li class="fw-normal">Combination x 1 <span>$60.00</span></li>
                                <li class="fw-normal">Combination x 1 <span>$120.00</span></li> -->
                                <!-- <li class="fw-normal">Subtotal <span>$240.00</span></li> -->
                                <li class="total-price">Tổng <span><?=number_format($_SESSION['total'],0,'','.')?> VNĐ</span></li>
                            </ul>
                            <div class="payment-check">
                                <div class="pc-item">
                                    <label for="pc-check">
                                        Trả tiền khi nhận hàng
                                        <input type="radio" id="pc-check" name="hinh_thuc" value="1" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="pc-item">
                                    <label for="pc-paypal">
                                        Thanh toán online qua VNPAY
                                        <input type="radio" id="pc-paypal" value="2" name="hinh_thuc">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="order-btn">
                                <button type="submit" class="site-btn place-btn">Đặt hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Shopping Cart Section End -->

<!-- Partner Logo Section Begin -->
<div class="partner-logo">
    <div class="container">
        <div class="logo-carousel owl-carousel">
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="img/logo-carousel/logo-1.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="img/logo-carousel/logo-2.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="img/logo-carousel/logo-3.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="img/logo-carousel/logo-4.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="img/logo-carousel/logo-5.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partner Logo Section End -->