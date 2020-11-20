<?php
require '../../global.php';
require_once '../../dao/loai.php';
require '../../dao/hang-hoa.php';
//-------------------------------//

extract($_REQUEST);

if(exist_param("ma_loai")){
    $loai = loai_select_by_id($ma_loai);
    $items = hang_hoa_select_by_loai($ma_loai);
}
else if(exist_param("dac_biet")){
    $items = hang_hoa_select_dac_biet();
}
else if(exist_param("keywords")){
    if (strlen($keywords)<3) {
        $keyworfs_exits = "! Nhập từ khóa >=3 ký tự";
        $items = hang_hoa_select_all();
    }
    if(!isset($keyworfs_exits)){
        $items = hang_hoa_select_keyword($keywords);
    }    
}
else{
    $items = hang_hoa_select_all();
}

$VIEW_NAME = "hang-hoa/liet-ke-ui.php";
require '../layout.php';
