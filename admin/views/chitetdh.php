<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card-header">
                        <h4 class="card-title">Thông tin khách hàng</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <!-- <p class="card-text">Add <code>.table-bordered</code> for borders on all sides of the table and cells. For
            Inverse Dark Table, add <code>.table-dark</code> along with <code>.table-bordered</code>.</p> -->
                            <p><strong>Tên người nhận: </strong><?= $dh['ho_ten'] ?></p>
                            <p><strong>Email: </strong><?= $dh['email'] ?></p>
                            <p><strong>Số điện thoại: </strong><?= $dh['sdt'] ?></p>
                            <p><strong>Địa chỉ: </strong><?= $dh['diachi'] ?></p>
                            <p><strong>Người đặt: </strong><?= ($dh['ID_User'] == null) ? "Khách" : "Người dùng" ?></p>
                            <?php if ($dh['trang_thai'] == 2) { ?>
                                <p> <strong>Trạng thái: </strong><span class="badge bg-success">Hoàn thành</span></p>
                            <?php } elseif ($dh['trang_thai'] == 1) { ?>
                                <p> <strong>Trạng thái: </strong><span class="badge bg-warning">Đang giao</span></p>
                            <?php } elseif ($dh['trang_thai'] == 3) { ?>
                                <p> <strong>Trạng thái: </strong><span class="badge bg-danger">Đã hủy</span></p>
                            <?php } else { ?>
                                <p> <strong>Trạng thái: </strong><span class="badge bg-info">Chờ xử lý</span></p>
                            <?php } ?>
                            <?php if ($dh['trang_thai'] == 1) { ?>
                                <form method="post" action="<?= ADMIN_URL ?>/?ctrl=donhang&act=updatett">
                                    <input type="hidden" name="id" value="<?= $dh['ID_DH'] ?>">
                                    <button type="submit" class="btn btn-danger">Đã giao hàng</button>
                                </form>
                            <?php } ?>

                        </div>
                        <!-- table bordered -->

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card-header">
                        <h4 class="card-title">Đơn hàng</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <!-- <p class="card-text">Add <code>.table-bordered</code> for borders on all sides of the table and cells. For
            Inverse Dark Table, add <code>.table-dark</code> along with <code>.table-bordered</code>.</p> -->
                            <p><strong>Mã đơn hàng: </strong><?= $dh['ID_DH'] ?></p>
                            <p><strong>Sản phẩm: </strong><?php
                                                            $total = 0;
                                                            foreach ($dhct as $ct) {
                                                                $total = $ct['gia'] * $ct['soluong'];
                                                            ?>
                                    <span class="text-danger">(<?= $ct['soluong'] ?>)</span> <?= $ct['ten_sp'] ?>
                                <?php } ?>
                            </p>
                            <p><strong>Tổng tiền: </strong><?= number_format($total, 0, '', '.') ?> VNĐ</p>
                            <p><strong>Ngày đặt: </strong><?= $dh['ngay_dat'] ?></p>
                            <p><strong>Ngày giao: </strong><?= ($dh['ngay_giao'] == null) ? "Đang chờ xử lý" : $dh['ngay_giao'] ?></p>
                            <?php if ($dh['trang_thai'] == 1 || $dh['trang_thai'] == 0) { ?>
                                <form method="post" action="<?= ADMIN_URL ?>/?ctrl=donhang&act=update">
                                    <div class="mb-3">
                                        <label for="" class="mb-2"><strong>Chọn ngày giao</strong></label>
                                        <input type="date" name="ngay_giao" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <input type="hidden" name="id" value="<?= $dh['ID_DH'] ?>">
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                </form>
                            <?php } ?>
                        </div>
                        <!-- table bordered -->

                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card-header">
                        <a type="button" href="?ctrl=donhang" class="btn btn-light">Trở lại</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>