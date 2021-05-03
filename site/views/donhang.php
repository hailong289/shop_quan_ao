<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.php"><i class="fa fa-home"></i>Trang chủ</a>
                    <span>Đơn hàng</span>
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
            <div class="col-lg-12">
                <?php foreach ($dh as $dh) {
                    $dhct = $this->model->ALLdonhangchitiet($dh['ID_DH']);
                ?>
                    <div class="card mb-3 w-100">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <div class="p-3">
                                    <h4 class="mb-2">Mã đơn: <?= $dh['ID_DH'] ?></h4>
                                    <p class="mb-1"><strong>Ngày đặt: <?= $dh['ngay_dat'] ?></strong></p>
                                    <p class="mb-3"><strong>Ngày giao: </strong><?= ($dh['ngay_giao'] == null) ? "Đang chờ" : "Dự kiến: " . $dh['ngay_giao'] ?></p>
                                    <?php if ($dh['trang_thai'] == 0) { ?>
                                      <a href="<?=SITE_URL?>/?act=donhang&huy=<?=$dh['ID_DH']?>" type="button" class="btn btn-danger">Hủy đơn</a>
                                    <?php }elseif($dh['trang_thai']==1){ ?>
                                        <a href="<?=SITE_URL?>/?act=donhang&xacnhan=<?=$dh['ID_DH']?>" type="button" class="btn btn-danger">Xác nhận</a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h5 class="card-title">Sản phẩm</h5>
                                    <?php foreach ($dhct as $ct) { ?>
                                        <p class="card-text"><?= $ct['soluong'] ?>X <?= $ct['ten_sp'] ?></p>
                                    <?php } ?>
                                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card-body">
                                    <h5 class="card-title">Trạng thái</h5>
                                    <?php if ($dh['trang_thai'] == 0) { ?>
                                        <button class="btn btn-primary" type="button" disabled>
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            <span class="visually-hidden">Đang xử lý</span>
                                        </button>
                                    <?php }elseif($dh['trang_thai']==1){ ?>
                                        <button class="btn btn-success" type="button" disabled>
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            <span class="visually-hidden">Đang giao</span>
                                        </button>
                                    <?php }elseif($dh['trang_thai']==2){ ?>
                                       <p style="font-size: 20px;"><span class="text-primary pr-2" ><i class="fas fa-check-circle"></i></span>Đã nhận</p> 
                                    <?php }elseif($dh['trang_thai']==3){ ?>
                                        <p style="font-size: 20px;"><span class="text-danger pr-2" ><i class="fas fa-ban"></i></span>Đơn hàng bị hủy</p> 
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="card-body">
                                <h5 class="card-title"></h5>
                                <?php if($dh['trang_thai']==2 || $dh['trang_thai']==3){ ?>
                                    <a href="<?=SITE_URL?>/?act=donhang&xoa=<?=$dh['ID_DH']?>" class="card-text text-dark d-block mt-2">Xóa</a>  
                                 <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- <ul class="progressbar">
                    <li class="complete">Đang xử lý</li>
                    <li class="complete">Đang giao</li>
                    <li class="active">Đã nhận</li>
                </ul>
                <style>
                    .progressbar li.complete:after {
                        background: #3aac5d;
                    }

                    .progressbar li.active:after {
                        background: #3aac5d;
                    }
                </style> -->
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
<?php if (isset($_SESSION['tb_tc']) == true) { ?>
    <script>
        Swal.fire(
            '<?= $_SESSION['tb_tc'] ?>',
            '',
            'success'
        );
    </script>
<?php unset($_SESSION['tb_tc']);
} ?>