<?php
require_once "../../global.php";
require_once "../../dao/thong-ke.php";
require_once "../../dao/loai.php";
require_once "../../dao/khach-hang.php";
require_once "../../dao/hang-hoa.php";
require_once "../../dao/binh-luan.php";
//--------------------------------//

//check_login();

extract($_REQUEST);

if (exist_param("btn_insert")) {
    $up_hinh = save_file("hinh", "$IMAGE_DIR/users/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : 'user.png';
    $image = isset($_FILES['hinh']) ? $_FILES['hinh'] : null;
    if ($image['size'] > 0) {
        if (strcmp($image['type'], 'image/jpeg') != 0 && strcmp($image['type'], 'image/png') != 0 && strcmp($image['type'], 'image/bmp') != 0) {
            $image_exist = "Nhập sai định dạng png,jpg,bmp";
        }
        if ($image['size'] > 1500000) {
            $image_exist = "Nhập hình <1,5mb";
        }
    }else{
        $image_exist = "! Vui lòng nhập hình sp";
    }

    if (khach_hang_exist($ma_kh)) {
        $ma_kh_exist = "! Tài khoản đã tồn tại";
    }
    if (!preg_match("/^[A-Za-z0-9_]{5,30}$/",$ma_kh)) {
        $ma_kh_exist = "! Tài khoản chỉ chứa a-z,0-9,A-Z _ tối thiểu 5 tối đa 30 ký tự";
    }
    if (!preg_match("/^[A-Za-z ]{3,32}$/",$ho_ten)) {
        $ho_ten_exist = "! Họ tên Tiếng Việt không chứa ký tự đặc biệt";
    }
    if (!preg_match('{6}',$mat_khau)) {
        $mat_khau_exist = "! Mật khẩu tối thiểu 6 ký tự";
    }
    if (strcmp($mat_khau, $mat_khau2) != 0) {
        $mat_khau2_exist = "! Mật khẩu không đúng";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_exist = "! Email không đúng";
    }
    if (!isset($ma_kh_exist) && !isset($image_exist) &&!isset($ho_ten_exist) && !isset($mat_khau_exist) && !isset($mat_khau2_exist) && !isset($email_exist)) {
        try {
            khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
            unset($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
            $MESSAGE = "Thêm mới thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Thêm mới thất bại!" . $exc->getMessage();
        }
    }

    $VIEW_NAME = "khach-hang/new.php";
} else if (exist_param("btn_update")) {
    $up_hinh = save_file("up_hinh", "$IMAGE_DIR/users/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;
    if (!preg_match("/^[A-Za-z ]{3,32}$/",$ho_ten)) {
        $ho_ten_exist = "! Họ tên Tiếng Việt không chứa ký tự đặc biệt";
    }
    if (!preg_match('{6}',$mat_khau)) {
        $mat_khau_exist = "! Mật khẩu tối thiểu 6 ký tự";
    }
    if (strcmp($mat_khau, $mat_khau2) != 0) {
        $mat_khau2_exist = "! Mật khẩu không đúng";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_exist = "! Email không đúng";
    }
    if (!isset($ho_ten_exist) && !isset($mat_khau_exist) && !isset($mat_khau2_exist) && !isset($email_exist)) {
        try {
            khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
            $MESSAGE = "Cập nhật thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Cập nhật thất bại!" . $exc->getMessage();
        }
        
    }$VIEW_NAME = "khach-hang/edit.php";
} else if (exist_param("btn_delete")) {
    $ma_kh = isset($_GET['ma_kh']) ? $_GET['ma_kh'] : null;
    if (!$ma_kh) {
        $items = khach_hang_select_all();
        $VIEW_NAME = "khach-hang/list.php";
        $MESSAGE = "Không đủ dữ liệu để xóa!";
        require "../layout.php";

        die;
    }
    $model= khach_hang_select_by_id($ma_kh);
    if(!$model){
        $items = khach_hang_select_all();
        $VIEW_NAME = "khach-hang/list.php";
        $MESSAGE = "Không tồn tại user!";
        require "../layout.php";
        die;
    }
    try {
        khach_hang_delete($ma_kh);
        $items = khach_hang_select_all();
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "khach-hang/list.php";
} else if (exist_param("btn_edit")) {
    $item = khach_hang_select_by_id($ma_kh);
    extract($item);
    $VIEW_NAME = "khach-hang/edit.php";
} else if (exist_param("btn_list")) {
    $items = khach_hang_select_all();
    $VIEW_NAME = "khach-hang/list.php";
} else if (exist_param("btn_new")){
    $VIEW_NAME = "khach-hang/new.php";
}

else {
    $items = khach_hang_select_all();
    $VIEW_NAME = "khach-hang/list.php";
}

require "../layout.php";
