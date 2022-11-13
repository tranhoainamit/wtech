<?php
 
 function insert_binhluan(){
    $sql = " select * from binh_luan order by ma_bl";
    $list_bl = pdo_query($sql);
    return $list_bl;
 }

 function delete_binhluan($ma_bl){
    $sql = "delete from binh_luan where ma_bl=" . $ma_bl;
    pdo_execute($sql);
 }