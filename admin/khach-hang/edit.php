<!DOCTYPE html>
<html>

<body>
    <h3 class="text-center mt-4 mb-4">QUẢN LÝ KHÁCH HÀNG</h3>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5>$MESSAGE</h5>";
    }
    ?>
    <form action="index.php" method="post" enctype="multipart/form-data" class="form-group">
        <div class="form-row mt-4 mb-4">
            <div class="col ">
                <label>MÃ KHÁCH HÀNG</label>
                <input class="form-control" name="ma_kh" value="<?= $ma_kh ?>" readonly>
            </div>
            <div class="col">
                <label>HỌ VÀ TÊN</label>
                <input class="form-control" name="ho_ten" value="<?= $ho_ten ?>">
                <p class="text-danger"> <?= isset($ho_ten_exist) ? $ho_ten_exist : "" ?></p>
            </div>
        </div>
        <div class="form-row mt-4 mb-4">
            <div class="col">
                <label>MẬT KHẨU</label>
                <input class="form-control" name="mat_khau" value="<?= $mat_khau ?>" type="password">
                <p class="text-danger"> <?= isset($mat_khau_exist) ? $mat_khau_exist : "" ?></p>
            </div>
            <div class="col">
                <label>XÁC NHẬN MẬT KHẨU</label>
                <input class="form-control" name="mat_khau2" value="<?= $mat_khau ?>" type="password">
                <p class="text-danger"> <?= isset($mat_khau2_exist) ? $mat_khau2_exist : "" ?></p>
            </div>
        </div>
        <div>
            <div class="mt-4 mb-4">
                <label>ĐỊA CHỈ EMAIL</label>
                <input class="form-control" name="email" value="<?= $email ?>">
                <p class="text-danger"> <?= isset($email_exist) ? $email_exist : "" ?></p>
            </div>
            <div class="mt-4 mb-4">
                <label>HÌNH ẢNH</label>
                <input name="hinh" type="hidden" value="<?= $hinh ?>">
                <input name="up_hinh" type="file"> (<?= $hinh ?>)
            </div>
        </div>
        <div class="mt-4 mb-4">
            <div>
                <label>KÍCH HOẠT?</label>
                <div>
                    <label>
                        <input <?= !$kich_hoat ? 'checked' : '' ?> name="kich_hoat" value="0" type="radio">
                        Chưa kích hoạt
                    </label>
                    <label>
                        <input <?= $kich_hoat ? 'checked' : '' ?> name="kich_hoat" value="1" type="radio">
                        Kích hoạt
                    </label>
                </div>
            </div>
            <div class="mt-4 mb-4">
                <label>VAI TRÒ</label>
                <div>
                    <label>
                        <input <?= !$vai_tro ? 'checked' : '' ?> name="vai_tro" value="0" type="radio">
                        Khách hàng
                    </label>
                    <label>
                        <input <?= $vai_tro ? 'checked' : '' ?> name="vai_tro" value="1" type="radio">
                        Nhân viên
                    </label>
                </div>
            </div>
        </div>
        <div>
            <div>
                <button class="btn btn-primary" name="btn_update">Cập nhật</button>
                <button class="btn btn-danger" type="reset">Nhập lại</button>
                <a class="btn btn-outline-success" href="index.php">Thêm mới</a>
                <a class="btn btn-outline-warning" href="index.php?btn_list">Danh sách</a>
            </div>
        </div>
    </form>
</body>

</html>