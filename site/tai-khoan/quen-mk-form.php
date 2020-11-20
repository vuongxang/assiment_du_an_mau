<!DOCTYPE html>
<html>
    <body>
    <div class="title-healding text-center">
        <h3 class="title-healding-content text-primary">QUÊN MẬT KHẨU</h3>
    </div>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5>$MESSAGE</h5>";
            }
        ?>
        <div class="user-form mt-4 bg-light p-4 shadow rounded">
        <form action="quen-mk.php" method="post">
            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input class="form-control" name="ma_kh">
            </div>
            <div class="form-group">
                <label>Địa chỉ email</label>
                <input class="form-control" name="email">
            </div>
            <div class="text-center">
                <button class="btn btn-primary" name="btn_forgot">Tìm lại mật khẩu</button>
            </div>
        </form>
        </div>
        
    </body>
</html>
