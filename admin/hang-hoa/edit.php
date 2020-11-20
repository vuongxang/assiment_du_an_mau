<!DOCTYPE html>
<html>

<body>
    <h3 class="text-center mt-4 mb-4">QUẢN LÝ HÀNG HÓA</h3>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5>$MESSAGE</h5>";
    }
    ?>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="form-row mb-4">
            <div class="col">
                <label>MÃ HÀNG HÓA</label>
                <input name="ma_hh" class="form-control" readonly value="<?= $ma_hh ?>">
            </div>
            <div class="col">
                <label>TÊN HÀNG HÓA</label>
                <input name="ten_hh" class="form-control" value="<?= $ten_hh ?>">
                <p class="text-danger"><?= isset($ten_hh_exist) ? $ten_hh_exist : "" ?></p>
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col">
                <label>ĐƠN GIÁ</label>
                <input name="don_gia" class="form-control" value="<?= $don_gia ?>">
                <p class="text-danger"><?= isset($don_gia_exist) ? $don_gia_exist : "" ?></p>
            </div>
            <div class="col">
                <label>GIẢM GIÁ</label>
                <input name="giam_gia" class="form-control" value="<?= $giam_gia ?>">
            </div>
        </div>
        <div>
            <div class="mb-4">
                <label>HÌNH ẢNH</label>
                <input name="up_hinh" type="file" class="form-control">
                <input name="hinh" class="form-control" type="hidden" value="<?= $hinh ?>"> (<?= $hinh ?>)
                <p class="text-danger"><?= isset($image_exist) ? $image_exist : "" ?></p>
                <br>
                <img class="img-thumbnail" src="<?= $CONTENT_URL ?>/images/products/<?= $hinh ?>" alt="" width="200">
                <br>
            </div>
        </div>
        <div class="form-row mb-4">
            <div class="col">
                <label>LOẠI HÀNG</label>
                <select name="ma_loai" class="form-control">
                    <?php
                    foreach ($loai_select_list as $loai) {
                        if ($loai['ma_loai'] == $ma_loai) {
                            echo '<option selected value="' . $loai['ma_loai'] . '">' . $loai['ten_loai'] . '</option>';
                        } else {
                            echo '<option value="' . $loai['ma_loai'] . '">' . $loai['ten_loai'] . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="col">
                <label>NGÀY NHẬP</label>
                <input type="date" class="form-control" name="ngay_nhap" value="<?= $ngay_nhap ?>">
                <p class="text-danger"><?= isset($ngay_nhap_exist) ? $ngay_nhap_exist : "" ?></p>
            </div>
        </div>
        <div>
            <div class="mb-4">
                <label>HÀNG ĐẶC BIỆT?</label>
                <div>
                    <label><input name="dac_biet" value="1" type="radio" <?= ($dac_biet==1) ? 'checked' : '' ?>>Đặc biệt</label>
                    <label><input name="dac_biet" value="0" type="radio" <?= ($dac_biet==0) ? 'checked' : '' ?>>Bình thường</label>
                </div>
            </div>

            <div class="mb-4">
                <label>SỐ LƯỢC XEM</label>
                <input name="so_luot_xem" class="form-control" readonly value="<?= $so_luot_xem ?>">
            </div>
        </div>
        <div>
            <div>
                <label>MÔ TẢ</label>
                <textarea name="mo_ta" rows="4" class="form-control" id="editor1"><?= $mo_ta ?></textarea>
                <p class="text-danger"><?= isset($mo_ta_exist) ? $mo_ta_exist : "" ?></p>
            </div>
            <div>
                <button class="btn btn-danger" name="btn_update">Cập nhật</button>
                <button class="btn btn-primary" type="reset">Nhập lại</button>
                <a class="btn btn-success" href="index.php">Thêm mới</a>
                <a class="btn btn-outline-danger" href="index.php?btn_list">Danh sách</a>
            </div>
        </div>
    </form>
</body>

</html>