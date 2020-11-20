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

if(exist_param("ma_hh")){
    if(exist_param("btn_delete")){
        try {
            binh_luan_delete($ma_bl);
            $MESSAGE = "Xóa thành công!";
        } 
        catch (Exception $exc) {
            $MESSAGE = "Xóa thất bại!";
        }
    }
    $items = binh_luan_select_by_hang_hoa($ma_hh);
    if(count($items) == 0){
        $items = thong_ke_binh_luan();
        $VIEW_NAME = "binh-luan/list.php";
    }
    else{
        $VIEW_NAME = "binh-luan/detail.php";
    }
}
else{
    $items = thong_ke_binh_luan();
    $VIEW_NAME = "binh-luan/list.php";
}
require "../layout.php";
