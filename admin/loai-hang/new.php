<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="<?= $CONTENT_URL ?>/js/validate.js"></script>
</head>
<body>
    <h3 class="panel-heading mb-4 text-center mt-4">QUẢN LÝ LOẠI HÀNG</h3>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5>$MESSAGE</h5>";
    }
    ?>
    <form action="index.php" method="post" class="form-group" onsubmit="return hopLe();">
        <div>
            <label class="mb-2">Mã loại</label>
            <input class="form-control mb-4" name="ma_loai" value="auto number" readonly>
        </div>

        <div>
            <label>Tên loại</label>
            <input class="form-control " id="ten_loai" name="ten_loai">
            <p class="mb-4 text-danger"><?= isset($ten_loai_error) ? $ten_loai_error : "" ?></p>
        </div>
        <div>
            <button class="btn btn-primary  mb-4" name="btn_insert">Thêm mới</button>
            <button class="btn btn-danger mb-4" type="reset">Nhập lại</button>
            <br>
            <i class="fas fa-list menu-icon mr-4"></i><a href="index.php?btn_list" class="list"> Danh sách loại hàng</a>
        </div>
    </form>
</body>

</html>