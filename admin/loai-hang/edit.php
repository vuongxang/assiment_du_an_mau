<!DOCTYPE html>
<html>
    <body>
        <h3 class="mt-4 mb-4">QUẢN LÝ LOẠI HÀNG</h3>
        <?php
            if(strlen($MESSAGE)){
                echo "<h5 >$MESSAGE</h5>";
            }
        ?>
        <form action="index.php" method="post" class="form-group">
            <div>
                <label>Mã loại</label>
                <input class="form-control" name="ma_loai" value="<?=$ma_loai?>" readonly>
            </div>
            <div>
                <label>Tên loại</label>
                <input  class="form-control" name="ten_loai" value="<?=$ten_loai?>" >
                <p class="mb-4 text-danger"><?= isset($ten_loai_error)? $ten_loai_error : ""?></p>
            </div>
            <div class="mt-4">
                <button class="btn btn-danger" name="btn_update">Cập nhật</button>
                <button class="btn btn-primary" type="reset">Nhập lại</button>
                <a class="btn btn-outline-primary" href="index.php">Thêm mới</a>
                <a class="btn btn-outline-danger" href="index.php?btn_list">Danh sách</a>
            </div>
        </form>
    </body>
</html>
