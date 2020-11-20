<!DOCTYPE html>
<html>

<body>
    <div>
        <div class="bg-primary text-center text-white p-2">TÀI KHOẢN</div>
        <div>
            <div class="text-center mt-2 pb-4 border-bottom">
                <img class="rounded-circle" src='<?= $CONTENT_URL ?>/images/users/<?= $_SESSION['user']['hinh'] ?>' width="100px">
                <br>
                <span class="text-info"><?= $_SESSION['user']['ho_ten'] ?></span>

            </div>
            <ul class="list-group">
                <li class="list-group-item"><a class="text-dark" href="<?= $SITE_URL ?>/tai-khoan/dang-nhap.php?btn_logoff">Đăng xuất</a></li>
                <li class="list-group-item"><a class="text-dark" href="<?= $SITE_URL ?>/tai-khoan/doi-mk.php">Đổi mật khẩu</a></li>
                <li class="list-group-item"><a class="text-dark" href="<?= $SITE_URL ?>/tai-khoan/cap-nhat-tk.php">Cập nhật tài khoản</a></li>
                <?php
                if ($_SESSION['user']['vai_tro'] == TRUE) {
                    echo "<li class='list-group-item'><a class='text-dark' href='$ADMIN_URL/trang-chinh'>Quản trị website</a></li>";
                }
                ?>
            </ul>
        </div>
    </div>
</body>

</html>