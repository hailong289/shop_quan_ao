<div class="row" id="table-bordered">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><?= (isset($title)) ? $title : "" ?></h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <!-- <p class="card-text">Add <code>.table-bordered</code> for borders on all sides of the table and cells. For
            Inverse Dark Table, add <code>.table-dark</code> along with <code>.table-bordered</code>.</p> -->
                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>ID_DH</th>
                                    <!-- <th>Ảnh</th> -->
                                    <th>Thông tin người nhận</th>
                                    <th>Ghi chú</th>
                                    <th>Thời gian</th>
                                    <th>Trạng thái</th>
                                    <th>Chi tiết</th>
                                    <!-- <th>Xóa</th> -->
                                    <!-- <th>LOCATION</th>
                                    <th>ACTION</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($dh as $dh) {
                                    $dhct = $this->model->GETDH_detail($dh['ID_DH']);
                                ?>
                                    <tr>
                                        <td class="text-bold-500"><?= $dh['ID_DH'] ?></td>
                                        <td class="col-3">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p class="mb-1"><strong>Tên người nhận: </strong><?= $dh['ho_ten'] ?></p>
                                                    <p class="mb-1"><strong>Email: </strong><?= $dh['email'] ?></p>
                                                    <p class="mb-1"><strong>Số điện thoại: </strong><?= $dh['sdt'] ?></p>
                                                    <p class="mb-1"><strong>Địa chỉ: </strong><?= $dh['diachi'] ?></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td><?= $dh['ghichu'] ?></td>
                                        <td>
                                            <p class="mb-1"><strong>Ngày đặt: </strong><?= $dh['ngay_dat'] ?></p>
                                            <p class="mb-1"><strong>Ngày giao: </strong><?= $dh['ngay_giao'] ?></p>
                                        </td>
                                        <td> <?php if ($dh['trang_thai'] == 2) { ?>
                                                <p><span class="badge bg-success">Hoàn thành</span></p>
                                            <?php } elseif ($dh['trang_thai'] == 1) { ?>
                                                <p><span class="badge bg-warning">Đang giao</span></p>
                                            <?php } elseif ($dh['trang_thai'] == 3) { ?>
                                                <p><span class="badge bg-danger">Đã hủy</span></p>
                                            <?php } else { ?>
                                                <p><span class="badge bg-info">Chờ xử lý</span></p>
                                            <?php } ?>
                                        </td>
                                        <td class="text-bold-500"><a href="<?= ADMIN_URL ?>/?ctrl=donhang&act=detail&id=<?= $dh['ID_DH'] ?>">Xem</a></td>
                                        <!-- <td><a href="<?= ADMIN_URL ?>/?ctrl=sanpham&act=delete&id=<?= $sp['ID_SP'] ?>" class="xoa"><i class="fas fa-trash-alt"></i></a></td> -->
                                    </tr>
                                <?php } ?>
                                <!-- <script>
                                    $('.xoa').click(function(e) {
                                        e.preventDefault();
                                        // alert('hello');
                                        link = $(this).attr('href');
                                        Swal.fire({
                                            title: 'Bạn có chắc chắn muốn xóa ?',
                                            text: "Xóa dữ liệu của bạn sẽ không khôi phục được !",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Có !'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                Swal.fire(
                                                    'Xóa thành công !',
                                                    '',
                                                    'success'
                                                ).then(result => {
                                                    window.location.href = link;
                                                });
                                            }
                                        });
                                    });
                                </script> -->
                            </tbody>
                        </table>
                    </div>
      
                </div>
                <!-- table bordered -->

            </div>
        </div>
    </div>
</div>
<?php if (isset($_SESSION['tb_sp']) == true) { ?>
    <script>
        Swal.fire(
            '<?= $_SESSION['tb_sp'] ?>',
            '',
            'success'
        );
    </script>
<?php unset($_SESSION['tb_sp']);
} ?>