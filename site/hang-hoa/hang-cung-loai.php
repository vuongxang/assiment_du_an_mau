<!DOCTYPE html>
<html>

<body>
    <div class="panel panel-default">
        <div class="panel-heading">HÀNG CÙNG LOẠI</div>
        <div class="panel-body">
            <div class="row">
                <?php
                $hh_cung_loai = hang_hoa_select_by_loai($ma_loai);
                foreach ($hh_cung_loai as $hh) { ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card border-0 mb-2 mt-2">
                            <img src="<?= $CONTENT_URL ?>/images/products/<?= $hh['hinh'] ?>" class="card-img-top">
                            <div class="card-body text-center">
                                <h5 class="card-title text-center">
                                    <a class="card-title-healding text-dark " href="../hang-hoa/chi-tiet.php?ma_hh=<?= $hh['ma_hh'] ?>"><?= $hh['ten_hh'] ?></a>
                                </h5>
                                <div class="card-price d-flex justify-content-around pb-3">
                                    <span class="price text-danger font-weight-bolder"><?= $hh['don_gia'] - $hh['don_gia'] * $hh['giam_gia'] / 100 ?>USD</span>
                                    <del class="price-del"><?= $hh['don_gia'] ?>USD</del>
                                </div>
                                <a href="../hang-hoa/chi-tiet.php?ma_hh=<?= $hh['ma_hh'] ?>" class="btn btn-primary">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <!-- echo "<li><a href='chi-tiet.php?ma_hh=$hh[ma_hh]'>$hh[ten_hh]</a></li>"; -->
                <?php } ?>
            </div>

        </div>
    </div>
</body>

</html>