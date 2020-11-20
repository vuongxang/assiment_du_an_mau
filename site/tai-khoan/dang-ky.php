<?php
require '../../global.php';
require '../../dao/khach-hang.php';

extract($_REQUEST);

if (exist_param("btn_register")) {
    if ($mat_khau != $mat_khau2) {
        $MESSAGE = "Xác nhận mật khẩu không đúng!";
    } else if (khach_hang_exist($ma_kh)) {
        $MESSAGE = "Mã này đã được sử dụng!";
    } else {
        $image = isset($_FILES['up_hinh'])? $_FILES['up_hinh'] : null;

        if(strcmp($image['type'],'image/jpeg')!=0 && strcmp($image['type'],'image/png')!=0 && strcmp($image['type'],'image/bmp')!=0 ){
            $image_exist ="Nhập sai định dạng png,jpg,bmp";
        }
        if($image['size']<=0 || $image['size']>1500000){
            $image_exist ="Nhập hình <1,5mb";
        }
        $file_name = save_file("up_hinh", "$IMAGE_DIR/users/");
        $hinh = $file_name ? $file_name : "user.png";
        
        if (!preg_match("/^[A-Za-z0-9_]{5,30}$/",$ma_kh)) {
            $ma_kh_exits = "! Tài khoản chỉ chứa a-z,0-9,A-Z _ tối thiểu 5 tối đa 32 ký tự";
        }
        if (!preg_match('{6}',$mat_khau)) {
            $mat_khau_exits = "! Mật khẩu tối thiểu 6 ký tự";
        }
        $regex_ho_ten = '/^([a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]+)$/i
        ';
        if (!preg_match($regex_ho_ten,$ho_ten)) {
            $ho_ten_exits = "! Họ tên Tiếng Việt không chứa ký tự đặc biệt và số";
        }
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_exits = "! Email không đúng";
        }
        if (!isset($ma_kh_exits) && !isset($mat_khau_exits) && !isset($ho_ten_exits) && !isset($email_exits)&& !isset($image_exist)) {
            try {
                khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
                $MESSAGE = "Đăng ký thành viên thành công!";
            } catch (Exception $exc) {
                $MESSAGE = "Đăng ký thành viên thất bại!";
            }
        }
    }
} else {
    global $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $mat_khau2;
}

$VIEW_NAME = "tai-khoan/dang-ky-ui.php";
require '../layout.php';
