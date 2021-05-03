<section id="basic-horizontal-layouts">
    <!-- <h3>Dashboard</h3>
    <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>
    </div> -->
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Danh mục</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="?ctrl=danhmuc&act=update" method="post">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Tên danh mục</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name" class="form-control" name="name" placeholder="Tên danh mục" value="<?=$dm['name']?>">
                                        <span class="text-danger mt-2"><?=(isset($error))? $error:""?></span>
                                        <input type="hidden" name="id" value="<?=$dm['ID_DM']?>">
                                    </div>
                                    <!-- <div class="col-md-4">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="email" id="email-id" class="form-control" name="email-id" placeholder="Email">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Mobile</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="number" id="contact-info" class="form-control" name="contact" placeholder="Mobile">
                                    </div> -->
                                    <div class="col-md-4">
                                        <label>Ẩn hiển</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block mr-2 mb-1">
                                                <div class='form-check'>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="radio" class="form-check-input form-check-primary" name="an_hien" value="0" id="customColorCheck1" <?=($dm['an_hien']==0)? "checked":""?>>
                                                        <label class="form-check-label" for="customColorCheck1">Ẩn</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-inline-block mr-2 mb-1">
                                                <div class='form-check'>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="radio" class="form-check-input form-check-secondary" name="an_hien" value="1" id="customColorCheck2"  <?=($dm['an_hien']==1)? "checked":""?>>
                                                        <label class="form-check-label" for="customColorCheck2">Hiện</label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- <div class="col-12 col-md-8 offset-md-4 form-group">
                                      
                                    </div> -->
                                    <div class="col-sm-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Cập nhật</button>
                                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Trở lại</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
