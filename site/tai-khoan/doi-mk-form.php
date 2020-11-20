<!DOCTYPE html>
<html>

<body>
    <div class="title-healding text-center mb-4">
        <h3 class="title-healding-content text-primary">ĐỔI MẬT KHẨU</h3>
    </div>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5 class='text-center text-danger'>$MESSAGE</h5>";
    }
    ?>
    <div class="user-form mt-4 bg-light p-4 shadow rounded">
        <form action="doi-mk.php" method="post">
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input class="form-control" name="ma_kh" readonly value="<?=$_SESSION['user']['ma_kh'] ?>">
            </div>
            <div class="form-group">
                <label>Mật khẩu cũ</label>
                <input class="form-control" name="mat_khau" type="password">
            </div>
            <div class="form-group">
                <label>Mật khẩu mới</label>
                <input class="form-control" name="mat_khau2" type="password">
                <p class="text-danger"><?= isset($mat_khau2_exits)? $mat_khau2_exits: "" ?></p>
            </div>
            <div class="form-group">
                <label>Xác nhận mật khẩu mới</label>
                <input class="form-control" name="mat_khau3" type="password">
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-danger" name="btn_change">Đổi mật khẩu</button>
            </div>
        </form>
    </div>

</body>

</html>