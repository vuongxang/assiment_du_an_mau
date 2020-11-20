<!DOCTYPE html>
<html>

<body>
    <div class="title-healding text-center mb-4">
        <h3 class="title-healding-content text-primary">CẬP NHẬT TÀI KHOẢN</h3>
    </div>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5 class='text-center text-danger'>$MESSAGE</h5>";
    }
    ?>
    <div class="user-form mt-4 bg-light p-4 shadow rounded">
        <form action="cap-nhat-tk.php" method="post" enctype="multipart/form-data">
            <div>
                <div class="text-center mb-4 pb-2 border-bottom">
                    <img class="rounded-circle" src="<?= $CONTENT_URL ?>/images/users/<?= $hinh ?>" width="100px">
                </div>
                <div>
                    <div class="form-group">
                        <label>Tên đăng nhập</label>
                        <input class="form-control" name="ma_kh" value="<?= $ma_kh ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Họ và tên</label>
                        <input class="form-control" name="ho_ten" value="<?= $ho_ten ?>">
                        <p class="text-danger"><?= isset($ho_ten_exits) ? $ho_ten_exits: "" ?></p>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ email</label>
                        <input class="form-control" name="email" value="<?= $email ?>">
                        <p class="text-danger"><?= isset($email_exits) ? $email_exits: "" ?></p>
                    </div>
                    <div class="form-group">
                        <label>Hình</label>
                        <input class="form-control" name="up_hinh" type="file">
                        <p class="text-danger"><?= isset($image_exist)? $image_exist :"" ?></p>
                    </div>
                    <div class="mt-4 mb-4 text-center">
                        <button class="btn btn-primary" name="btn_update">Cập nhật</button>
                    </div>
                    <!--Giá trị mặc định-->
                    <input name="vai_tro" value="<?= $vai_tro ?>" type="hidden">
                    <input name="kich_hoat" value="<?= $kich_hoat ?>" type="hidden">
                    <input name="mat_khau" value="<?= $mat_khau ?>" type="hidden">
                    <input name="hinh" value="<?= $hinh ?>" type="hidden">
                </div>
            </div>
        </form>
    </div>

</body>

</html>