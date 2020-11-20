<?php
Require_once 'pdo.php';

/**
 * Thêm loại mới
 * @param String $ten_loai là tên loại
 * @throws PDOException lỗi thêm mới
 */
function loai_insert($ten_loai){
    $sql = "INSERT INTO loai_hang(ten_loai) VALUES('$ten_loai')";
    pdo_execute($sql, $ten_loai);
}
/**
 * Cập nhật tên loại
 * @param int $ma_loai là mã loại cần cập nhật
 * @param String $ten_loai là tên loại mới
 * @throws PDOException lỗi cập nhật
 */
function loai_update($ma_loai, $ten_loai){
    $sql = "UPDATE loai_hang SET ten_loai='$ten_loai' WHERE ma_loai='$ma_loai'";
    pdo_execute($sql, $ma_loai, $ten_loai);

}
/**
 * Xóa một hoặc nhiều loại
 * @param mix $ma_loai là mã loại hoặc mảng mã loại
 * @throws PDOException lỗi xóa
 */
function loai_delete($ma_loai){
    if(is_array($ma_loai)){
        foreach ($ma_loai as $ma) {
            $sql = "DELETE FROM loai_hang WHERE ma_loai='$ma'";
            pdo_execute($sql, $ma);
        }
    }
    else{
        $sql = "DELETE FROM loai_hang WHERE ma_loai='$ma_loai'";
        pdo_execute($sql, $ma_loai);
    }

}
/**
 * Truy vấn tất cả các loại
 * @return array mảng loại truy vấn được
 * @throws PDOException lỗi truy vấn
 */
function loai_select_all(){
    $sql = "SELECT * FROM loai_hang";
    return pdo_query($sql);

}
/**
 * Truy vấn một loại theo mã
 * @param int $ma_loai là mã loại cần truy vấn
 * @return array mảng chứa thông tin của một loại
 * @throws PDOException lỗi truy vấn
 */
function loai_select_by_id($ma_loai){
    $sql = "SELECT * FROM loai_hang WHERE ma_loai='$ma_loai'";
    return pdo_query_one($sql, $ma_loai);

}
/**
 * Kiểm tra sự tồn tại của một loại
 * @param int $ma_loai là mã loại cần kiểm tra
 * @return boolean có tồn tại hay không
 * @throws PDOException lỗi truy vấn
 */
function loai_count(){
    $sql = "SELECT * FROM loai_hang";
    $loais = pdo_query($sql);
    return count($loais);
}
