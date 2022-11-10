<?php
require_once 'pdo.php';

//Thêm khách hàng mới
function khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $so_dt, $hinh, $vai_tro, $dia_chi){
    $sql = "INSERT INTO khach_hang(ma_kh, mat_khau, ho_ten, so_dt, hinh, vai_tro, dia_chi) VALUES (?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $ma_kh, $mat_khau, $ho_ten, $so_dt, $hinh, $vai_tro, $dia_chi);
}

//Cập nhật thông tin 1 khách hàng
function khach_hang_update($ma_kh, $mat_khau, $ho_ten, $so_dt, $hinh, $vai_tro, $dia_chi){
    $sql = "UPDATE khach_hang SET mat_khau=?,ho_ten=?,so_dt=?,hinh=?,vai_tro=?,dia_chi=? WHERE ma_kh=?";
    pdo_execute($ma_kh, $mat_khau, $ho_ten, $so_dt, $hinh, $vai_tro==1, $dia_chi);
}

// Xóa một hoặc nhiều khách hàng
function khach_hang_delete($ma_kh){
    $sql = "DELETE FROM khach_hang  WHERE ma_kh=?";
    if(is_array($ma_kh)){
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_kh);
    }
}

// Truy vấn tất cả các khách hàng
function khach_hang_select_all(){
    $sql = "SELECT * FROM khach_hang";
    return pdo_query($sql);
}

//Truy vấn một kháh hàng theo ma_kh
function khach_hang_select_by_id($ma_kh){
    $sql = "SELECT * FROM khach_hang WHERE ma_kh=?";
    return pdo_query_one($sql, $ma_kh);
}

//Kiểm tra sự tồn tại của một khách hang3
function khach_hang_exist($ma_kh){
    $sql = "SELECT count(*) FROM khach_hang WHERE $ma_kh=?";
    return pdo_query_value($sql, $ma_kh) > 0;
}

//Lấy danh sách kh theo vai trò
function khach_hang_select_by_role($vai_tro){
    $sql = "SELECT * FROM khach_hang WHERE vai_tro=?";
    return pdo_query($sql, $vai_tro);
}
//Cập nhật mật khẩu của 1 khách hàng
function khach_hang_change_password($ma_kh, $mat_khau_moi){
    $sql = "UPDATE khach_hang SET mat_khau=? WHERE ma_kh=?";
    pdo_execute($sql, $mat_khau_moi, $ma_kh);
}