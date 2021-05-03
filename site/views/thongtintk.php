<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.php"><i class="fa fa-home"></i>Trang chủ</a>
                    <span>Thông tin tài khoản</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
      
        <div class="col-sm-12" style="min-height: 300px;">
            <form action="<?= SITE_URL ?>/?act=account&what=updatetk" method="post" enctype="multipart/form-data">
                <h2 class="mt-4 mb-3">Thông tin tài khoản</h2>
                <div class="row">
                    <div class="col-sm-4 mb-2">
                        <?php if ($user['hinh'] == null) { ?>
                            <img src="./upload/user.jpg" alt="" width="100%" class="mb-2" height="270px">
                        <?php } else { ?>
                            <img src="./upload/<?= $user['hinh'] ?>" alt="" width="100%" class="mb-2" height="270px">
                        <?php } ?>
                        <input type="file" name="img" id="">
                    </div>
                    <div class="col-sm-8 mb-2">
                        <div class="d-flex flex-column mb-5">
                            <div class="p-2 mb-2">
                                <p class="mb-0"><strong>Họ và tên</strong></p>
                                <input type="text" class="border-bottom w-100" id="exampleInputEmail1" name="hoten" style="outline: none;border: none;" value="<?= $user['ho_ten'] ?>">
                                <input type="hidden" name="id" value="<?= $user['ID_User'] ?>">
                                <?= (isset($error_ht) == true) ? $error_ht : "" ?>
                            </div>
                            <div class="p-2 mb-2">
                                <p class="mb-0"><strong>Email</strong></p>
                                <input type="text" class="border-bottom w-100" id="exampleInputEmail1" name="email" style="outline: none;border: none;" value="<?= $user['email'] ?>">
                                <?= (isset($error_email) == true) ? $error_email : "" ?>
                            </div>
                            <div class="p-2 mb-2">
                                <p class="mb-0"><strong>Số điện thoại</strong></p>
                                <input type="text" class="border-bottom w-100" id="exampleInputEmail1" name="sdt" style="outline: none;border: none;" value="<?= ($user['sdt'] == null) ? "Chưa có" : $user['sdt'] ?>">
                                <?= (isset($error_sdt) == true) ? $error_sdt : "" ?>
                            </div>
                            <div class="p-2 mb-2">
                                <p class="mb-2"><strong>Trạng thái</strong></p>
                                <?php if ($user['an_hien'] == 1) { ?>
                                    <button class="btn btn-success" type="button" disabled>
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        <span class="visually-hidden">Đang hoạt động</span>
                                    </button>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="site-btn login-btn mb-5">Cập nhật</button>
            </form>
        </div>
    </div>
</div>