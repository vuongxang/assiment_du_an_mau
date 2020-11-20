<!DOCTYPE html>
<html>

<head>
    <script src="<?= $CONTENT_URL ?>/js/xshop-list.js"></script>

</head>

<body>
    <div class="list-healding mb-4 mt-4">
        <h3 class="text-center panel-heading">QUẢN LÝ LOẠI HÀNG</h3>
    </div>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5 >$MESSAGE</h5>";
    }
    ?>
    <form action="index.php" method="post">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($items as $item) {
                    extract($item);
                ?>
                    <tr>
                        <th><input type="checkbox" name="ma_loai[]" value="<?= $ma_loai ?>"></th>
                        <td><?= $ma_loai ?></td>
                        <td><?= $ten_loai ?></td>
                        <td>
                            <a href="index.php?btn_edit&ma_loai=<?= $ma_loai ?>">Sửa</a>
                            <a onclick="return confirm('Bạn chắc muốn xóa?')" href="index.php?btn_delete&ma_loai=<?= $ma_loai ?>">Xóa</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4">
                        <button id="check-all" type="button" class="btn btn-outline-primary mr-2">Chọn tất cả</button>
                        <button id="clear-all" type="button" class="btn btn-outline-danger mr-2">Bỏ chọn tất cả</button>
                        <button onclick="return confirm('Bạn chắc muốn xóa?')" id="btn-delete" name="btn_delete" class="btn btn-outline-success mr-2">Xóa các mục chọn</button>
                        <button name="btn_new" class="btn btn-outline-danger mr-2">Nhập thêm</button>
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>
</body>

</html>