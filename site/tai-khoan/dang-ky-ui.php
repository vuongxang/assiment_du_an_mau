<!DOCTYPE html>
<html>

<body>
    <div class="title-healding text-center">
        <h3 class="title-healding-content text-primary">ĐĂNG KÝ THÀNH VIÊN</h3>
    </div>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5>$MESSAGE</h5>";
    }
    ?>
    <div class="user-form mt-4 bg-light p-4 shadow rounded">
        <form action="dang-ky.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input class="form-control" name="ma_kh" value="<?= $ma_kh ?>">
                <p class="text-danger"><?= isset($ma_kh_exits)? $ma_kh_exits :"" ?></p>
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input class="form-control" name="mat_khau" type="password" value="<?= $mat_khau ?>">
                <p class="text-danger"><?= isset($mat_khau_exits)? $mat_khau_exits :"" ?></p>
            </div>
            <div class="form-group">
                <label>Xác nhận mật khẩu</label>
                <input class="form-control" name="mat_khau2" type="password" value="<?= $mat_khau2 ?>">
            </div>
            <div class="form-group">
                <label>Họ và tên</label>
                <input class="form-control" name="ho_ten" value="<?= $ho_ten ?>">
                <p class="text-danger"><?= isset($ho_ten_exits)? $ho_ten_exits :"" ?></p>
            </div>
            <div class="form-group">
                <label>Địa chỉ email</label>
                <input class="form-control" name="email" value="<?= $email ?>">
                <p class="text-danger"><?= isset($email_exits)? $email_exits :"" ?></p>
            </div>
            <div class="form-group">
                <label>Hình</label>
                <input class="form-control" name="up_hinh" type="file">
                <p class="text-danger"><?= isset($image_exist)? $image_exist :"" ?></p>
            </div>

            <div class="text-center">
                <button class="btn btn-nomal btn-primary" name="btn_register">Đăng ký</button>
            </div>
            <!--Giá trị mặc định-->
            <input name="vai_tro" value="0" type="hidden">
            <input name="kich_hoat" value="0" type="hidden">
        </form>
    </div>
</body>

</html>