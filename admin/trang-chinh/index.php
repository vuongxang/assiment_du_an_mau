<?php 
require_once "../../global.php";
require_once "../../dao/loai.php";
require_once "../../dao/khach-hang.php";
require_once "../../dao/hang-hoa.php";
require_once "../../dao/binh-luan.php";

$VIEW_NAME = "trang-chinh/home.php";
check_login();
require "../layout.php";
