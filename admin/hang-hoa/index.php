<?php
require_once "../../global.php";
require_once "../../dao/thong-ke.php";
require_once "../../dao/loai.php";
require_once "../../dao/khach-hang.php";
require_once "../../dao/hang-hoa.php";
require_once "../../dao/binh-luan.php";

//check_login();

extract($_REQUEST);
if (exist_param("btn_insert")) {

    $up_hinh = save_file("hinh", "$IMAGE_DIR/products/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : 'product.png';

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
    if (strlen($ten_hh) < 3) {
        $ten_hh_exist = "! Tiêu đề >3 ký tự";
    }
    if (!is_numeric($don_gia) || $don_gia <= 0) {
        $don_gia_exist = "! Đơn giá là số >0";
    }
    $regex_ngay_nhap = '/^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/';
    if (!preg_match($regex_ngay_nhap,$ngay_nhap)) {
        $ngay_nhap_exist = "! Nhập ngày đúng định dạng dd-mm-yy";
    }
    
    if (empty($mo_ta)) {
        $mo_ta_exist = "! Mô tả không được để trống";
    }
    if (!isset($ten_hh_exist) && !isset($image_exist) && !isset($don_gia_exist) && !isset($ngay_nhap_exist) && !isset($mo_ta_exist)) {
        $ngay_nhap = date("Y-m-d", strtotime($ngay_nhap));
        try {
            hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);
            unset($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);
            $MESSAGE = "Thêm mới thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Thêm mới thất bại!";
        }
    }

    $VIEW_NAME = "hang-hoa/new.php";
} else if (exist_param("btn_update")) {
    $model = hang_hoa_select_by_id($ma_hh);
    if (!$model) {
        $items = hang_hoa_select_page();
        $VIEW_NAME = "hang-hoa/list.php";
        $MESSAGE = "Không tồn tại sản phẩm!";
        require "../layout.php";
        die;
    }
    $up_hinh = save_file("up_hinh", "$IMAGE_DIR/products/");
    $image = isset($_FILES['up_hinh']) ? $_FILES['up_hinh'] : null;

    if ($image['size'] > 0) {

        if (strcmp($image['type'], 'image/jpeg') != 0 && strcmp($image['type'], 'image/png') != 0 && strcmp($image['type'], 'image/bmp') != 0) {
            $image_exist = "Nhập sai định dạng png,jpg,bmp";
            $hinh = $hinh;
        }
        if ($image['size'] > 1500000) {
            $image_exist = "Nhập hình <1,5mb";
            $hinh = $hinh;
        }
        if (isset($image_exist)) {
            $hinh = $hinh;
        } else {
            $hinh = $up_hinh;
        }
    } else {
        $hinh = $hinh;
    }

    if (strlen($ten_hh) < 3) {
        $ten_hh_exist = "! Tiêu đề >3 ký tự";
    }
    if (!is_numeric($don_gia) || $don_gia <= 0) {
        $don_gia_exist = "! Đơn giá là số >0";
    }
    if (empty($ngay_nhap)) {
        $ngay_nhap_exist = "! Ngày nhập không được để trống";
    }
    if (empty($mo_ta)) {
        $mo_ta_exist = "! Mô tả không được để trống";
    }
    if (!isset($ten_hh_exist) && !isset($image_exist) &&  !isset($don_gia_exist) && !isset($ngay_nhap_exist) && !isset($mo_ta_exist)) {
        try {
            hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta);
            $MESSAGE = "Cập nhật thành công!";
        } catch (Exception $exc) {
            echo $exc->getMessage();
            $MESSAGE = "Cập nhật thất bại!";
        }
    }

    $VIEW_NAME = "hang-hoa/edit.php";
} else if (exist_param("btn_delete")) {
    $ma_hh = isset($_GET['ma_hh']) ? $_GET['ma_hh'] : null;
    if (!$ma_hh) {
        $items = hang_hoa_select_page();
        $VIEW_NAME = "hang-hoa/list.php";
        $MESSAGE = "Không đủ dữ liệu để xóa!";
        require "../layout.php";

        die;
    }
    $model = hang_hoa_select_by_id($ma_hh);
    if (!$model) {
        $items = hang_hoa_select_page();
        $VIEW_NAME = "hang-hoa/list.php";
        $MESSAGE = "Không tồn tại sản phẩm!";
        require "../layout.php";
        die;
    }
    try {
        hang_hoa_delete($ma_hh);
        $items = hang_hoa_select_page();
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "hang-hoa/list.php";
} else if (exist_param("btn_edit")) {
    $ma_hh = isset($_GET['ma_hh']) ? $_GET['ma_hh'] : null;
    if (!$ma_hh) {
        $items = hang_hoa_select_page();
        $VIEW_NAME = "hang-hoa/list.php";
        $MESSAGE = "Không đủ dữ liệu để cập nhật!";
        require "../layout.php";
        die;
    }
    $model = hang_hoa_select_by_id($ma_hh);
    if (!$model) {
        $items = hang_hoa_select_page();
        $VIEW_NAME = "hang-hoa/list.php";
        $MESSAGE = "Không tồn tại sản phẩm!";
        require "../layout.php";
        die;
    }
    $item = hang_hoa_select_by_id($ma_hh);
    extract($item);
    $VIEW_NAME = "hang-hoa/edit.php";
} else if (exist_param("btn_list")) {
    $items = hang_hoa_select_page();
    $VIEW_NAME = "hang-hoa/list.php";
} else if (exist_param("btn_search")) {
    //echo strlen($keyword); die;
    $items = hang_hoa_select_keyword($keyword);
    // var_dump($items); die;
    $VIEW_NAME = "hang-hoa/list-search.php";
} else if (exist_param("btn_new")) {
    $VIEW_NAME = "hang-hoa/new.php";
} else {
    $items = hang_hoa_select_page();
    $VIEW_NAME = "hang-hoa/list.php";
}

if ($VIEW_NAME == "hang-hoa/new.php" || $VIEW_NAME == "hang-hoa/edit.php") {
    $loai_select_list = loai_select_all();
}

require "../layout.php";
