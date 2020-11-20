<?php
require_once "../../global.php";
require_once "../../dao/thong-ke.php";
require_once "../../dao/loai.php";
require_once "../../dao/khach-hang.php";
require_once "../../dao/hang-hoa.php";
require_once "../../dao/binh-luan.php";
//--------------------------------//

//check_login();


if(exist_param("chart")){
    $VIEW_NAME = "thong-ke/chart.php";
}
else{
    $VIEW_NAME = "thong-ke/list.php";
}
$items = thong_ke_hang_hoa();
require "../layout.php";
