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
                                    <th>Tên danh mục</th>
                                    <th>Trạng thái</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                    <!-- <th>LOCATION</th>
                                    <th>ACTION</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($ds_dm as $dm) { ?>
                                    <tr>
                                        <td class="text-bold-500"><?= $dm['ID_DM'] ?></td>
                                        <td><?= $dm['name'] ?></td>
                                        <td><?= ($dm['an_hien'] == 1) ? "Hiện" : "Ẩn" ?></td>
                                        <td class="text-bold-500"><a href="<?= ADMIN_URL ?>/?ctrl=danhmuc&act=edit&id=<?= $dm['ID_DM'] ?>"><i class="fas fa-edit"></i></a></td>

                                        <td><a href="<?= ADMIN_URL ?>/?ctrl=danhmuc&act=delete&id=<?= $dm['ID_DM'] ?>" class="xoa"><i class="fas fa-trash-alt"></i></a></td>
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
                                                ).then(result=>{
                                                    window.location. href = link;
                                                });
                                            }
                                        });
                                    });
                                </script>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- table bordered -->

            </div>
        </div>
    </div>
</div>
<?php if (isset($_SESSION['tb_dm']) == true) { ?>
    <script>
        Swal.fire(
            '<?= $_SESSION['tb_dm'] ?>',
            '',
            'success'
        );
    </script>
<?php unset($_SESSION['tb_dm']);
} ?>