<!DOCTYPE html>
<html>

<body>
    <h3 class="mb-4 text-center mt-4">QUẢN LÝ HÀNG HÓA</h3>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5>$MESSAGE</h5>";
    }
    ?>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div class="col">
                <label class="mb-2">MÃ HÀNG HÓA</label>
                <input type="text" class="form-control" name="ma_hh" readonly value="auto number">
            </div>
            <div class="col">
                <label>TÊN HÀNG HÓA</label>
                <input type="text" class="form-control" name="ten_hh" value="<?=!empty($ten_hh)? $ten_hh:""?>">
                <p class="text-danger"><?= isset($ten_hh_exist)? $ten_hh_exist : "" ?></p>
            </div>
        </div>
        <div class="form-row">

            <div class="col">
                <label>ĐƠN GIÁ</label>
                <input type="number" class="form-control" name="don_gia" value="<?=!empty($don_gia)? $don_gia:""?>">
                <p class="text-danger"><?= isset($don_gia_exist)? $don_gia_exist : "" ?></p>
            </div>
            <div class="col">
                <label>GIẢM GIÁ</label>
                <input type="number" class="form-control" name="giam_gia" value="<?=!empty($giam_gia)? $giam_gia:""?>">
            </div>
        </div>
        <div>
        <div>
                <label>LOẠI HÀNG</label>
                <select name="ma_loai" class="form-control">
                    <?php
                    foreach ($loai_select_list as $loai) {
                        echo '<option value="' . $loai['ma_loai'] . '">' . $loai['ten_loai'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div >
                <label class="mt-4">HÌNH ẢNH</label>
                <input name="hinh" class="form-control-file" type="file">
                <p class="text-danger"><?= isset($image_exist)? $image_exist : "" ?></p>
            </div>
            <div >
                <label class="mt-2">HÀNG ĐẶC BIỆT?</label>
                <div>
                    <label><input name="dac_biet" value="1" type="radio">Đặc biệt</label>
                    <label><input name="dac_biet" value="0" type="radio" checked>Bình thường</label>
                </div>
            </div>
        </div>


        <div class="form-row mt-4">
            
            <div class="col">
                <label >NGÀY NHẬP</label>
                <input type="text" name="ngay_nhap" class="form-control" value="<?=!empty($ngay_nhap)? $ngay_nhap:""?>">
                <p class="text-danger"><?= isset($ngay_nhap_exist)? $ngay_nhap_exist : "" ?></p>
            </div>
            <div class="col">
                <label>SỐ LƯỢC XEM</label>
                <input name="so_luot_xem" readonly value="0" class="form-control">
            </div>
        </div>
        <div>
            <div>
                <label>MÔ TẢ</label>
                <textarea name="mo_ta" rows="4" class="form-control" id="editor1"><?=!empty($mo_ta)? $mo_ta:""?></textarea>
                <p class="text-danger"><?= isset($mo_ta_exist)? $mo_ta_exist : "" ?></p>
            </div>
            <div class="mt-2">
                <button class="btn btn-danger" name="btn_insert">Thêm mới</button>
                <button class="btn btn-primary" type="reset">Nhập lại</button>
                <a class="btn btn-outline-success" href="index.php?btn_list">Danh sách</a>
            </div>
        </div>
    </form>
</body>

</html>