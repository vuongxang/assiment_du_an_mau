<!DOCTYPE html>
<html>

<body>
    <div class="title-healding text-center">
        <h3 class="title-healding-content text-primary"><?= isset($loai)? $loai['ten_loai']:"" ?></h3>
    </div>
    <p class="text-danger"><?= isset($keyworfs_exits)? $keyworfs_exits :"" ?></p>
    <div class="row">
    
        <?php
        foreach ($items as $item) {
            extract($item);
        ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card border-0 mb-2 mt-2">
                    <img src="<?= $CONTENT_URL ?>/images/products/<?= $item['hinh'] ?>" class="card-img-top">
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
        <?php
        }
        ?>
        <div>
            <a href="chi-tiet.php?ma_hh=<?= $ma_hh ?>">
                <img src="">
            </a>
            <div>
                <h3></h3>
                <p></p>
            </div>
        </div>
    </div>
</body>

</html>