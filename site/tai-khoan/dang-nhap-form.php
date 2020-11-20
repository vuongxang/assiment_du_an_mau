<!DOCTYPE html>
<html>

<body>
    <div class="title-healding text-center mb-4">
        <h3 class="title-healding-content text-primary">ĐĂNG NHẬP</h3>
    </div>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5 class='text-center text-danger'>$MESSAGE</h5>";
    }
    ?>
    <div class="user-form mt-4 bg-light p-4 shadow rounded">
        <form action="dang-nhap.php" method="post">
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input class="form-control" name="ma_kh" value="<?= $ma_kh ?>">
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input class="form-control" name="mat_khau" type="password" value="<?= $mat_khau ?>">
            </div>
            <div class="form-group">
                <label>
                    <input name="ghi_nho" type="checkbox" checked>
                    Ghi nhớ tài khoản?
                </label>
            </div>
            <div class="text-center pt-4 pb-4">
                <button class="btn btn-primary" name="btn_login">Đăng nhập</button>
            </div>
        </form>
    </div>

</body>

</html>