<table class='table mb-0' id="table1">
    <thead>
        <tr>
            <th>Tên người đặt</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Trạng thái</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($dh as $dh) { ?>
            <tr>
                <td><?= $dh['ho_ten'] ?></td>
                <td><?= $dh['email'] ?></td>
                <td><?= $dh['sdt'] ?></td>
                <td><?= $dh['diachi'] ?></td>
                <td>
                    <?php if ($dh['trang_thai'] == 2) { ?>
                        <p><span class="badge bg-success">Hoàn thành</span></p>
                    <?php } elseif ($dh['trang_thai'] == 1) { ?>
                        <p><span class="badge bg-warning">Đang giao</span></p>
                    <?php } elseif ($dh['trang_thai'] == 3) { ?>
                        <p><span class="badge bg-danger">Đã hủy</span></p>
                    <?php } else { ?>
                        <p><span class="badge bg-info">Chờ xử lý</span></p>
                    <?php } ?>
                    <a href="<?= ADMIN_URL ?>/?ctrl=donhang&act=detail&id=<?= $dh['ID_DH'] ?>">Xem chi tiết</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>