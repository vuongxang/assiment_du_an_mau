<div class="title-healding text-center">
    <h3 class="title-healding-content text-primary">SẢN PHẨM NỔI BẬT</h3>
</div>
<p class="text-center text-danger"><?= isset($msg)? $msg: "" ?></p>
<div class="row">
    <?php foreach ($items as $item) { ?>

        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card border-0 mb-2 mt-2">
                <img src="<?= $CONTENT_URL ?>/images/products/<?= $item['hinh'] ?>" class="card-img-top">
                <div class="action">
                    <a href="../hang-hoa/gio-hang.php?ma_hh=<?= $item['ma_hh'] ?>" class="buy"><i class="fa fa-cart-plus"></i> Mua ngay</a>
                    <a href="#" class="like"><i class="fa fa-heart"></i> Yêu thích</a>
                    <div class="clear"></div>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title text-center">
                        <a class="card-title-healding text-dark " href="../hang-hoa/chi-tiet.php?ma_hh=<?= $item['ma_hh'] ?>"><?= $item['ten_hh'] ?></a>
                    </h5>
                    <div class="card-price d-flex justify-content-around pb-3">
                        <span class="price text-danger font-weight-bolder"><?= $item['don_gia'] - $item['don_gia'] * $item['giam_gia'] / 100 ?>USD</span>
                        <del class="price-del"><?= $item['don_gia'] ?>USD</del>
                    </div>
                    <a href="../hang-hoa/chi-tiet.php?ma_hh=<?= $item['ma_hh'] ?>" class="btn btn-primary">Xem chi tiết</a>
                </div>
            </div>
        </div>


    <?php } ?>
</div>