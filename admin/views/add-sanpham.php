<div class="row match-height">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"></h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form" method="post" action="<?=ADMIN_URL?>/?ctrl=sanpham&act=store" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="first-name-column">Danh mục</label>
                                    <select name="dm" id="" class="form-select">
                                        <?php foreach ($dm as $dm) { ?>
                                            <option value="<?= $dm['ID_DM'] ?>"><?= $dm['name'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <!-- <input type="text" id="first-name-column"  placeholder="First Name" name="fname-column"> -->
                                </div>
                            </div>
                         
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="city-column">Tên sản phẩm</label>
                                    <input type="text" id="city-column" class="form-control" placeholder="Tên sản phẩm" name="tensp">
                                    <?=(isset($error_tsp)==true)? $error_tsp:""?>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="country-floating">Ảnh</label>
                                    <input type="file" id="country-floating" class="form-control" name="img">
                                    <?=(isset($error_img)==true)? $error_img:""?>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="company-column">Giá</label>
                                    <input type="text" id="company-column" class="form-control" name="gia" placeholder="Giá sản phẩm">
                                    <?=(isset($error_gia)==true)? $error_gia:""?>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email-id-column">Giá khuyến mãi</label>
                                    <input type="gia" id="email-id-column" class="form-control" name="giakm" placeholder="Giá khuyến mãi">
                                    <?=(isset($error_giakm)==true)? $error_giakm:""?>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <label for="company-column">Số lượng sản phẩm</label>
                                    <input type="text" id="company-column" class="form-control" name="slsp" placeholder="Số lượng sản phẩm">
                                    <?=(isset($error_sl)==true)? $error_sl:""?>
                                </div>
                            </div>
                            <div class="form-group col-6 mt-2 mb-2">
                                <div class='form-check'>
                                    <div class="checkbox">
                                        <input type="checkbox" id="checkbox5" name="hot" value="1" class='form-check-input' checked>
                                        <label for="checkbox5">Hot</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-6 mt-2 mb-2">
                                <ul class="list-unstyled mb-0">
                                    <li class="d-inline-block mr-2 mb-1">
                                        <div class='form-check'>
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="form-check-input form-check-primary" checked name="an_hien" value="0" id="customColorCheck1">
                                                <label class="form-check-label" for="customColorCheck1">Ẩn</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-inline-block mr-2 mb-1">
                                        <div class='form-check'>
                                            <div class="custom-control custom-checkbox">
                                                <input type="radio" class="form-check-input form-check-secondary" name="an_hien" value="1" id="customColorCheck2">
                                                <label class="form-check-label" for="customColorCheck2">Hiện</label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group col-12">
                                 <textarea name="mota"> <?=(isset($error_mota)==true)? $error_mota:""?></textarea>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary mr-1 mb-1">Thêm sản phẩm</button>
                                <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Trở lại</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>