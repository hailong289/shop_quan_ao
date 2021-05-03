<!-- <div class="page-title">
        <h3>Dashboard</h3>
        <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>
    </div> -->
<section class="section">
    <div class="row mb-2">
        <div class="col-12 col-md-3">
            <div class="card card-statistic">
                <div class="card-body p-0">
                    <div class="d-flex flex-column">
                        <div class='px-3 py-3 d-flex justify-content-between'>
                            <h3 class='card-title'>Danh mục</h3>
                            <div class="card-right d-flex align-items-center">
                                <p><?= (isset($sl_dm)) ?  $sl_dm : "0" ?></p>
                            </div>
                        </div>
                        <!-- <div class="chart-wrapper">
                            <canvas id="canvas1" style="height:100px !important"></canvas>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card card-statistic">
                <div class="card-body p-0">
                    <div class="d-flex flex-column">
                        <div class='px-3 py-3 d-flex justify-content-between'>
                            <h3 class='card-title'>Sản phẩm</h3>
                            <div class="card-right d-flex align-items-center">
                                <p><?= (isset($sl_sp)) ?  $sl_sp : "0" ?></p>
                            </div>
                        </div>
                        <!-- <div class="chart-wrapper">
                            <canvas id="canvas2" style="height:100px !important"></canvas>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card card-statistic">
                <div class="card-body p-0">
                    <div class="d-flex flex-column">
                        <div class='px-3 py-3 d-flex justify-content-between'>
                            <h3 class='card-title'>Đơn hàng</h3>
                            <div class="card-right d-flex align-items-center">
                                <p><?= (isset($sl_dh)) ?  $sl_dh : "0" ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="card card-statistic">
                <div class="card-body p-0">
                    <div class="d-flex flex-column">
                        <div class='px-3 py-3 d-flex justify-content-between'>
                            <h3 class='card-title'>Người dùng</h3>
                            <div class="card-right d-flex align-items-center">
                                <p><?= (isset($sl_user)) ?  $sl_user : "0" ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class='card-heading p-1 pl-3'>Doanh thu tháng</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div>
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                        <script>
                            $.get("https://hailong.com/project/shopquanao/admin/?ctrl=home&act=doanhthu",
                                function(data, textStatus, jqXHR) {

                                    a = JSON.parse(data);
                                    month = a.thang;
                                    month.sort(function(a, b) {
                                        if (a < b) {
                                            return -1;
                                        }
                                        if (a > b) {
                                            return 1;
                                        }
                                        // a bằng b
                                        return 0;
                                    });
                                    var ctx = document.getElementById('myChart');
                                    var myChart = new Chart(ctx, {
                                        type: 'line',
                                        data: {
                                            labels: month,
                                            datasets: [{
                                                label: '# of Votes',
                                                data: [12, 19, 3, 5, 2, 3],
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 0.2)',
                                                    'rgba(54, 162, 235, 0.2)',
                                                    'rgba(255, 206, 86, 0.2)',
                                                    'rgba(75, 192, 192, 0.2)',
                                                    'rgba(153, 102, 255, 0.2)',
                                                    'rgba(255, 159, 64, 0.2)'
                                                ],
                                                borderColor: [
                                                    'rgba(255, 99, 132, 1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(255, 206, 86, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(153, 102, 255, 1)',
                                                    'rgba(255, 159, 64, 1)'
                                                ],
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                });
                        </script>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Đơn hàng mới</h4>
                    <div class="d-flex ">
                        <i data-feather="download"></i>
                    </div>
                </div>
                <div class="card-body px-0 pb-0" style="overflow-x: scroll;">
                    <div class="table-responsive" id="noidung">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card ">
                <div class="card-header">
                    <h4>Doanh thu năm </h4>
                </div>
                <div class="card-body">
                    <div id="radialBars"></div>
                    <div class="text-center mb-5">
                        <!-- <h6>From last month</h6> -->
                        <!-- <h1 class='text-green' id="U_online"></h1> -->
                        <!-- <script>
                          $.get("https://hailong.com/project/shopquanao/admin/?ctrl=home&act=user_online", 
                              function (data, textStatus, jqXHR) {
                                   $('#U_online').text(data);
                              });
                        </script> -->
                        <canvas id="myChartNam" width="400" height="400"></canvas>

                        <script>
                            var ctx = document.getElementById('myChartNam');
                            var myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ['2020', '2021'],
                                    datasets: [{
                                        label: 'Thống kê năm 2020 - 2021',
                                        data: [<?= $doanhthu_namTruoc ?>, <?= $sl_doanhthu ?>],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        </script>

                    </div>
                </div>
            </div>
            <div class="card widget-todo">
                <div class="card-header border-bottom d-flex justify-content-between align-items-center">
                    <h4 class="card-title d-flex">
                        <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>Sản phẩm bán chạy
                    </h4>

                </div>
                <div class="card-body px-0 py-1">
                    <table class='table table-borderless'>
                        <?php foreach ($sanphambc as $sp) { ?>
                            <tr class="border-bottom">
                                <td class='col-3 p-4 '><img src="../upload/<?= $sp['img'] ?>" alt="" width="80px"></td>
                                <td class='col-9 p-0'>
                                    <?= $sp['name'] ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>