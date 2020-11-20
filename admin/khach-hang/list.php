<!DOCTYPE html>
<html>

<head>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="<?= $CONTENT_URL ?>/js/xshop-list.js"></script>
</head>

<body>
    <h3 class="text-center mt-4 mb-4">QUẢN LÝ KHÁCH HÀNG</h3>
    <?php
    if (strlen($MESSAGE)) {
        echo "<h5>$MESSAGE</h5>";
    }
    ?>
    <form action="index.php" method="post">
        <table class="table table-striped mt-4">
            <thead class="thead-dark">
                <tr>
                    <th></th>
                    <th>MÃ KH</th>
                    <th>HỌ VÀ TÊN</th>
                    <th>ĐỊA CHỈ EMAIL</th>
                    <th>HÌNH ẢNH</th>
                    <th>VAI TRÒ?</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($items as $item) {
                    extract($item);
                ?>
                    <tr>
                        <th><input type="checkbox" name="ma_kh[]" value="<?= $ma_kh ?>"></th>
                        <td><?= $ma_kh ?></td>
                        <td><?= $ho_ten ?></td>
                        <td><?= $email ?></td>
                        <td><?= $hinh ?></td>
                        <td><?= $vai_tro ? 'Nhân viên' : 'Khách hàng' ?></td>
                        <td>
                            <a href="index.php?btn_edit&ma_kh=<?= $ma_kh ?>">Sửa</a>
                            <a onclick="return confirm('Bạn chắc muốn xóa?')" href="index.php?btn_delete&ma_kh=<?= $ma_kh ?>">Xóa</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="7">
                        <button class="btn btn-outline-primary mr-2" id="check-all" type="button">Chọn tất cả</button>
                        <button class="btn btn-outline-danger mr-2" id="clear-all" type="button">Bỏ chọn tất cả</button>
                        <button class="btn btn-outline-success mr-2" id="btn-delete" name="btn_delete" onclick="return confirm('Bạn chắc muốn xóa?')">Xóa các mục chọn</button>
                        <button class="btn btn-outline-danger mr-2" name="btn_new">Nhập thêm</button>
                    </td>
                </tr>
            </tfoot>
        </table>
    </form>
</body>

</html>