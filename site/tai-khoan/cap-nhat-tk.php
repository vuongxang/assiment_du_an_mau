<?php
require '../../global.php';
require '../../dao/khach-hang.php';

check_login();

extract($_REQUEST);


if (exist_param("btn_update")) {
    if (!preg_match("/^[A-Za-z ]{3,32}$/", $ho_ten)) {
        $ho_ten_exits = "! Họ tên Tiếng Việt không chứa ký tự đặc biệt";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_exits = "! Email không đúng";
    }
    $image = isset($_FILES['up_hinh']) ? $_FILES['up_hinh'] : null;
    if($image['size']>0){
        if (strcmp($image['type'], 'image/jpeg') != 0 && strcmp($image['type'], 'image/png') != 0 && strcmp($image['type'], 'image/bmp') != 0) {
            $image_exist = "Nhập sai định dạng png,jpg,bmp";
        }
        if ($image['size'] > 1500000) {
            $image_exist = "Nhập hình <1,5mb";
        }
    }
    
    if (!isset($ho_ten_exits) && !isset($email_exits) && !isset($image_exist)) {
        $file_name = save_file("up_hinh", "$IMAGE_DIR/users/");
        $hinh = $file_name ? $file_name : $hinh;
        try {
            khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
            $MESSAGE = "Cập nhật thông tin thành viên thành công!";
            $_SESSION['user'] = khach_hang_select_by_id($ma_kh);
        } catch (Exception $exc) {
            $MESSAGE = "Cập nhật thông tin thành viên thất bại!" . $exc->getMessage();
        }
    }
} else {
    extract($_SESSION['user']);
}

$VIEW_NAME = "tai-khoan/cap-nhat-tk-form.php";
require '../layout.php';
