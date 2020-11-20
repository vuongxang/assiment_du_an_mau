<!DOCTYPE html>
<html>
    <body>
        <h3 class="text-center mt-4 mb-4">THỐNG KÊ HÀNG HÓA TỪNG LOẠI</h3>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>LOẠI HÀNG</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($items as $item){
                    extract($item);
            ?>
                <tr>
                    <td><?=$ten_loai?></td>
                    <td><?=$so_luong?></td>
                    <td>$<?=number_format($gia_min,2)?></td>
                    <td>$<?=number_format($gia_max,2)?></td>
                    <td>$<?=number_format($gia_avg,2)?></td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
        <a class="btn btn-outline-danger mt-4" href="index.php?chart">Xem biểu đồ</a>
    </body>
</html>
