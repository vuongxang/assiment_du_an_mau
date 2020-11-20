<?php
require '../../global.php';
require '../../dao/hang-hoa.php';
//-------------------------------//

extract($_REQUEST);
$ma_hh=isset($_GET['ma_hh'])? $_GET['ma_hh']: null;
if(!$ma_hh){
    $items = hang_hoa_select_dac_biet();
    $VIEW_NAME = "trang-chinh/trang-chu.php";
    $msg = "Sản phẩm không tồn tại";
    require '../layout.php';
    die;
}
// Truy vấn mặt hàng theo mã

$hang_hoa = hang_hoa_select_by_id($ma_hh);
if(!$hang_hoa){
    $items = hang_hoa_select_dac_biet();
    $VIEW_NAME = "trang-chinh/trang-chu.php";
    $msg = "Sản phẩm không tồn tại";
}else{
    extract($hang_hoa);

    // Tăng số lượt xem lên 1
    hang_hoa_tang_so_luot_xem($ma_hh);
    
    $VIEW_NAME = "hang-hoa/chi-tiet-ui.php";
    
}
require '../layout.php';
