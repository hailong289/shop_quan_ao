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
                                    <th>ID</th>
                                    <!-- <th>Ảnh</th> -->
                                    <th>Chi tiết</th>
                                    <th>Trạng thái</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                    <!-- <th>LOCATION</th>
                                    <th>ACTION</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($ds_sp as $sp) { ?>
                                    <tr>
                                        <td class="text-bold-500"><?= $sp['ID_SP'] ?></td>
                                        <!-- <td></td> -->
                                        <td>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <img src="../upload/<?= $sp['img'] ?>" alt="" width="100%" height="150px">
                                                </div>
                                                <div class="col-lg-8">
                                                   <div class="row">
                                                    <div class="col-lg-12">
                                                        <h3><?= $sp['name'] ?></h3>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <p class="mb-1"><b>Giá:</b> <?= $sp['gia'] ?></p>
                                                        <p class="mb-1"><b>Giá khuyến mãi:</b> <?= $sp['giakhuyenmai'] ?></p>
                                                        <p class="mb-1"><b>Danh mục :</b> <?=$this->models->getDM_byID($sp['ID_DM'])?></p>
                                                      
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <!-- <h3></h3> -->
                                                        <p class="mb-1"><b>Số người xem:</b> <?=($sp['solanxem']!=null)? $sp['solanxem']:"Đang cập nhật"?></p>
                                                        <p class="mb-1"><b>Đã bán:</b> <?=($sp['solanmua']!=null)? $sp['solanmua']:"Đang cập nhật"?></p>
                                                        <p class="mb-1"><b>Số lượng trong kho:</b> <?= $sp['soluongtonkho'] ?></p>
                                                        <p><?= ($sp['hot'] == 1) ? '<span class="badge bg-danger">Hot</span>' : '' ?></p>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><?= ($sp['an_hien'] == 1) ? "Hiện" : "Ẩn" ?></td>
                                        <td class="text-bold-500"><a href="<?= ADMIN_URL ?>/?ctrl=sanpham&act=edit&id=<?= $sp['ID_SP'] ?>"><i class="fas fa-edit"></i></a></td>

                                        <td><a href="<?= ADMIN_URL ?>/?ctrl=sanpham&act=delete&id=<?= $sp['ID_SP'] ?>" class="xoa"><i class="fas fa-trash-alt"></i></a></td>
                                    </tr>
                                <?php } ?>
                                <script>
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
                                </script>
                            </tbody>
                        </table>
                    </div>
                    <?=$links?>
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