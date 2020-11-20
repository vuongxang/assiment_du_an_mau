<?php
Require_once 'pdo.php';
require_once 'loai.php';

function hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
    $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ma_loai, dac_biet, so_luot_xem, ngay_nhap, mo_ta) 
    VALUES ('$ten_hh','$don_gia','$giam_gia','$hinh','$ma_loai','$dac_biet','$so_luot_xem','$ngay_nhap','$mo_ta')";
    pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta);
}

function hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
    $sql = "UPDATE hang_hoa SET ten_hh='$ten_hh', don_gia='$don_gia', giam_gia='$giam_gia', hinh='$hinh',
     ma_loai='$ma_loai', dac_biet='$dac_biet', so_luot_xem='$so_luot_xem', ngay_nhap='$ngay_nhap', mo_ta='$mo_ta' WHERE ma_hh='$ma_hh'";
    pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta, $ma_hh);

}

function hang_hoa_delete($ma_hh){
    
    if(is_array($ma_hh)){
        foreach ($ma_hh as $ma) {
            $sql = "DELETE FROM hang_hoa WHERE  ma_hh='$ma'";

            pdo_execute($sql, $ma);
        }
    }
    else{
        $sql = "DELETE FROM hang_hoa WHERE  ma_hh='$ma_hh'";
        pdo_execute($sql, $ma_hh);
    }
}

function hang_hoa_select_all(){
    $sql = "SELECT * FROM hang_hoa";
    return pdo_query($sql);
}
    
function hang_hoa_select_by_id($ma_hh){
    $sql = "SELECT * FROM hang_hoa WHERE ma_hh='$ma_hh'";
    return pdo_query_one($sql, $ma_hh);
}
   
function hang_hoa_exist($ma_hh){
    $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh='$ma_hh'";
    return pdo_query_value($sql, $ma_hh) > 0;
}
    
function hang_hoa_tang_so_luot_xem($ma_hh){
    $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh='$ma_hh'";
    pdo_execute($sql, $ma_hh);
}
    
function hang_hoa_select_top10(){
    $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
    return pdo_query($sql);
}
    
function hang_hoa_select_dac_biet(){
    $sql = "SELECT * FROM hang_hoa WHERE dac_biet=1";
    return pdo_query($sql);
}
    
function hang_hoa_select_by_loai($ma_loai){
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai='$ma_loai'";
    return pdo_query($sql, $ma_loai);
}
    
function hang_hoa_select_keyword($keyword){
    $sql = "SELECT * FROM hang_hoa hh "
            . " JOIN loai_hang lo ON lo.ma_loai=hh.ma_loai "
            . " WHERE ten_hh LIKE '%$keyword%' OR ten_loai LIKE '%$keyword%'";
            //echo $sql; die;
            return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
}
    
function hang_hoa_select_page(){

    $row_per_page = 8;
    $current_page = exist_param("page_no")? $_REQUEST['page_no'] : 1;
    $total_row = pdo_query_value("SELECT COUNT(*) FROM hang_hoa");
    $total_page = ceil($total_row/$row_per_page);
    if($current_page<1){
    $current_page =1;
    }
    if($current_page>$total_page){
        $current_page = $total_page;
    }
    $start = ($current_page-1)*$row_per_page;
    $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh LIMIT {$start}, {$row_per_page}";

    $_SESSION['total_page'] = $total_page;
    $_SESSION['prev_page'] = ($current_page>1)? ($current_page-1): 1;
    $_SESSION['next-page'] =   ($current_page<$total_page)? ($current_page+1 ): $total_page;

    return pdo_query($sql);
}
    
function count_hang_hoa(){
    $products = hang_hoa_select_all();
    return count($products);
}
