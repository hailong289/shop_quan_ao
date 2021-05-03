<div class="row match-height">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"></h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form" method="post" action="<?= ADMIN_URL ?>/?ctrl=user&act=store" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="city-column">Tên tài khoản</label>
                                    <input type="text" id="city-column" class="form-control" placeholder="Tên tài khoản" name="tentk">
                                    <?= (isset($error_tk) == true) ? $error_tk : "" ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="city-column">Họ và tên</label>
                                    <input type="text" id="city-column" class="form-control" placeholder="Họ và tên" name="hoten">
                                    <?= (isset($error_ht) == true) ? $error_ht : "" ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="company-column">Email</label>
                                    <input type="text" id="company-column" class="form-control" name="email" placeholder="Email">
                                    <?= (isset($error_email) == true) ? $error_email : "" ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email-id-column">Số điện thoại</label>
                                    <input type="gia" id="email-id-column" class="form-control" name="sdt" placeholder="Số điện thoại">
                                    <?= (isset($error_sdt) == true) ? $error_sdt : "" ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="company-column">Mật khẩu</label>
                                    <input type="text" id="company-column" class="form-control" name="mk" placeholder="Mật khẩu">
                                    <?= (isset($error_mk) == true) ? $error_mk : "" ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="country-floating">Ảnh</label>
                                    <input type="file" id="upload" class="form-control" name="img">
                                    <?= (isset($error_img) == true) ? $error_img : "" ?>
                                </div>
                            </div>

                            <div class="form-group col-6 mt-2 mb-2">
                                <ul class="list-unstyled mb-0">
                                    <li class="d-inline-block mr-2 mb-1">
                                        <div class='form-check'>
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="form-check-input form-check-primary" name="vai_tro" value="0" id="customColorCheck1">
                                                <label class="form-check-label" for="customColorCheck1">Quản trị</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-inline-block mr-2 mb-1">
                                        <div class='form-check'>
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="form-check-input form-check-secondary" name="vai_tro" value="1" id="customColorCheck2" checked>
                                                <label class="form-check-label" for="customColorCheck2">Người dùng</label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group col-6 mt-2 mb-2">
                                <ul class="list-unstyled mb-0">
                                    <li class="d-inline-block mr-2 mb-1">
                                        <div class='form-check'>
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="form-check-input form-check-primary" name="an_hien" value="0" id="customColorCheck1">
                                                <label class="form-check-label" for="customColorCheck1">Ẩn</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-inline-block mr-2 mb-1">
                                        <div class='form-check'>
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="form-check-input form-check-secondary" name="an_hien" value="1" id="customColorCheck2" checked>
                                                <label class="form-check-label" for="customColorCheck2">Hiện</label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-12">
                                <img id="imgload" src="" alt="" width="200px">
                            </div>
                            <script>
                                function readURL(input) {

                                    if (input.files && input.files[0]) {
                                        var reader = new FileReader();

                                        reader.onload = function(e) {
                                            $('#imgload').attr('src', e.target.result);
                                        }

                                        reader.readAsDataURL(input.files[0]);
                                    }
                                }

                                $("input[name=img]").change(function() {
                                    readURL(this);
                                });
                            </script>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary mr-1 mb-1">Thêm khách hàng</button>
                                <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Trở lại</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>