<div class="row match-height">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"></h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form" method="post" action="<?= ADMIN_URL ?>/?ctrl=sanpham&act=update" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Danh mục</label>
                                    <select name="dm" id="" class="form-select">
                                        <?php foreach ($dm as $dm) {
                                            if ($dm['ID_DM'] == $sp['ID_DM']) {
                                        ?>
                                                <option value="<?= $dm['ID_DM'] ?>" selected><?= $dm['name'] ?></option>
                                            <?php } else {  ?>
                                                <option value="<?= $dm['ID_DM'] ?>"><?= $dm['name'] ?></option>
                                        <?php }
                                        } ?>
                                    </select>
                                    <!-- <input type="text" id="first-name-column"  placeholder="First Name" name="fname-column"> -->
                                </div>
                            </div>
                         
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="city-column">Tên sản phẩm</label>
                                    <input type="text" id="city-column" class="form-control" placeholder="Tên sản phẩm" name="tensp" value="<?= $sp['name'] ?>">
                                    <input type="hidden" name="id_sp" value="<?=$sp['ID_SP']?>">
                                    <?= (isset($error_tsp) == true) ? $error_tsp : "" ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="country-floating">Ảnh</label>
                                    <input type="file" id="country-floating" class="form-control" name="img">
                                    <img src="../upload/<?=$sp['img']?>" alt="" width="100px" class="mt-2">
                              
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="company-column">Giá</label>
                                    <input type="text" id="company-column" class="form-control" name="gia" placeholder="Giá sản phẩm" value="<?= $sp['gia'] ?>">
                                    <?= (isset($error_gia) == true) ? $error_gia : "" ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email-id-column">Giá khuyến mãi</label>
                                    <input type="gia" id="email-id-column" class="form-control" name="giakm" placeholder="Giá khuyến mãi" value="<?= $sp['giakhuyenmai'] ?>">
                                    <?= (isset($error_giakm) == true) ? $error_giakm : "" ?>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="company-column">Số lượng sản phẩm</label>
                                    <input type="text" id="company-column" class="form-control" name="slsp" placeholder="Số lượng sản phẩm" value="<?= $sp['soluongtonkho'] ?>">
                                    <?= (isset($error_sl) == true) ? $error_sl : "" ?>
                                </div>
                            </div>
                            <div class="form-group col-6 mt-2 mb-2">
                                <div class='form-check'>
                                    <div class="checkbox">
                                        <input type="checkbox" id="checkbox5" name="hot" value="1" class='form-check-input' <?= ($sp['hot'] == 1) ? "checked" : "" ?>>
                                        <label for="checkbox5">Hot</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-6 mt-2 mb-2">
                                <ul class="list-unstyled mb-0">
                                    <li class="d-inline-block mr-2 mb-1">
                                        <div class='form-check'>
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="form-check-input form-check-primary" checked name="an_hien" value="0" id="customColorCheck1" <?= ($sp['an_hien'] == 0) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="customColorCheck1">Ẩn</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-inline-block mr-2 mb-1">
                                        <div class='form-check'>
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="form-check-input form-check-secondary" name="an_hien" value="1" id="customColorCheck2" <?= ($sp['an_hien'] == 1) ? "checked" : "" ?>>
                                                <label class="form-check-label" for="customColorCheck2">Hiện</label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="mota"><?= $sp['mota'] ?></textarea>
                                <?= (isset($error_mota) == true) ? $error_mota : "" ?>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary mr-1 mb-1">Cập nhật sản phẩm</button>
                                <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Trở lại</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>