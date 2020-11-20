<!DOCTYPE html>
<html>

<body>
    <h3 class="text-center mt-4 mb-4">QUẢN LÝ KHÁCH HÀNG</h3>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5>$MESSAGE</h5>";
    }
    ?>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <div class="form-row mt-4 mb-4">
                <div class="col">
                    <label>MÃ KHÁCH HÀNG</label>
                    <input type="text" class="form-control" name="ma_kh" value="<?= !empty($ma_kh)? $ma_kh: '' ?>">
                   <p class="text-danger"> <?= isset($ma_kh_exist)? $ma_kh_exist:"" ?></p>
                </div>
                <div class="col">
                    <label>HỌ VÀ TÊN</label>
                    <input type="text" class="form-control" name="ho_ten" value="<?= !empty($ho_ten)? $ho_ten: '' ?>">
                    <p class="text-danger"> <?= isset($ho_ten_exist)? $ho_ten_exist:"" ?></p>
                </div>
            </div>

            <div class="form-row mt-4 mb-4">
                <div class="col">
                    <label>MẬT KHẨU</label>
                    <input name="mat_khau" class="form-control" type="password" value="<?= !empty($mat_khau)? $mat_khau: '' ?>">
                    <p class="text-danger"> <?= isset($mat_khau_exist)? $mat_khau_exist   :"" ?></p>
                </div>
                <div class="col">
                    <label>XÁC NHẬN MẬT KHẨU</label>
                    <input class="form-control" name="mat_khau2" type="password">
                    <p class="text-danger"> <?= isset($mat_khau2_exist)? $mat_khau2_exist   :"" ?></p>
                </div>
            </div>

            <div class="mt-4 mb-4">
                <label>ĐỊA CHỈ EMAIL</label>
                <input class="form-control" name="email" value="<?= !empty($email)? $email: '' ?>">
                <p class="text-danger"> <?= isset($email_exist)? $email_exist :"" ?></p>
            </div>
            <div class="mt-4 mb-4">
                <label>HÌNH ẢNH</label>
                <input class="form-control" name="hinh" type="file">
                <p class="text-danger"> <?= isset($image_exist)? $image_exist :"" ?></p>               
            </div>

            <div class="form-row mt-4 mb-4">
                <div class="col">
                    <label>KÍCH HOẠT?</label>
                    <div>
                        <label><input name="kich_hoat" value="0" type="radio">Chưa kích hoạt</label>
                        <label><input name="kich_hoat" value="1" type="radio" checked>Kích hoạt</label>
                    </div>
                </div>
                <div class="col">
                    <label>VAI TRÒ</label>
                    <div >
                        <label><input name="vai_tro" value="0" type="radio">Khách hàng</label>
                        <label><input name="vai_tro" value="1" type="radio" checked>Nhân viên</label>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <button class="btn btn-primary" name="btn_insert">Thêm mới</button>
                <button class="btn btn-danger" type="reset">Nhập lại</button>
                <a class="btn btn-outline-success" href="index.php?btn_list">Danh sách</a>
            </div>
        </div>
    </form>
</body>

</html>