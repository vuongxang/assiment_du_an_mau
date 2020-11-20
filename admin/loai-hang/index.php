<?php
require_once "../../global.php";
require_once "../../dao/thong-ke.php";
require_once "../../dao/loai.php";
require_once "../../dao/khach-hang.php";
require_once "../../dao/hang-hoa.php";
require_once "../../dao/binh-luan.php";
//--------------------------------//

check_login();

extract($_REQUEST);
// $VIEW_NAME = "loai-hang/list.php";
if (exist_param("btn_insert")) {
    if(empty($ten_loai)){
        $ten_loai_error = "Vui lòng nhập tên loại";
    }
    if(!isset($ten_loai_error)){
        try {
            loai_insert($ten_loai);
            unset($ten_loai, $ma_loai);
            $MESSAGE = "Thêm mới thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Thêm mới thất bại!" . $exc->getMessage();
        }
    }    
    $VIEW_NAME = "loai-hang/new.php";
} else if (exist_param("btn_update")) {
    
    if(empty($ten_loai)){
        $ten_loai_error = "Vui lòng nhập tên loại";
    }
    if(!isset($ten_loai_error)){
        try {
            loai_update($ma_loai, $ten_loai);
            $MESSAGE = "Cập nhật thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Cập nhật thất bại!" . $exc->getMessage();
        }
    }
    $VIEW_NAME = "loai-hang/edit.php";

} else if (exist_param("btn_delete")) {
    $ma_loai = isset($_GET['ma_loai']) ? $_GET['ma_loai'] : null;
    if (!$ma_loai) {
        $items = loai_select_all();
        $VIEW_NAME = "loai-hang/list.php";
        $MESSAGE = "Không đủ dữ liệu để xóa!";
        require "../layout.php";
        die;
    }
    $item = loai_select_by_id($ma_loai);
    if (!$item) {
        $items = loai_select_all();
        $VIEW_NAME = "loai-hang/list.php";
        $MESSAGE = "Loại hàng không tồn tại";
        require "../layout.php";
        die;
    }
    try {
        loai_delete($ma_loai);
        $items = loai_select_all();
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!" . $exc->getMessage();
    }
    $VIEW_NAME = "loai-hang/list.php";
} else if (exist_param("btn_edit")) {
    $ma_loai = isset($_GET['ma_loai']) ? $_GET['ma_loai'] : null;
    if (!$ma_loai) {
        $items = loai_select_all();
        $VIEW_NAME = "loai-hang/list.php";
        $MESSAGE = "Không đủ dữ liệu để cập nhật!";
        require "../layout.php";
        die;
    }
    $item = loai_select_by_id($ma_loai);
    if (!$item) {
        $items = loai_select_all();
        $VIEW_NAME = "loai-hang/list.php";
        $MESSAGE = "Loại hàng không tồn tại";
        require "../layout.php";
        die;
    }
    extract($item);
    $VIEW_NAME = "loai-hang/edit.php";
} else if (exist_param("btn_list")) {
    $items = loai_select_all();
    $VIEW_NAME = "loai-hang/list.php";
} else if (exist_param("btn_new")) {
    $VIEW_NAME = "loai-hang/new.php";
} else {
    $items = loai_select_all();
    $VIEW_NAME = "loai-hang/list.php";
}

require "../layout.php";
